<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private $jsonPath = 'products.json';

    private function getProducts()
    {
        if (!Storage::disk('local')->exists($this->jsonPath)) {
            return [];
        }
        return json_decode(Storage::disk('local')->get($this->jsonPath), true) ?? [];
    }

    private function saveProducts(array $products)
    {
        Storage::disk('local')->put(
            $this->jsonPath,
            json_encode(array_values($products), JSON_PRETTY_PRINT)
        );
    }

    public function index()
    {
        $products = $this->getProducts();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $products = $this->getProducts();
        $ids = array_map('intval', array_column($products, 'id'));
        $newId = $ids === [] ? 1 : max($ids) + 1;

        $products[] = [
            'id' => $newId,
            'name' => $request->name,
            'category' => $request->category,
            'type' => $request->type,
            'price' => (float) $request->price,
            'image' => 'images/white5.png',
        ];

        $this->saveProducts($products);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(string $id)
    {
        $products = $this->getProducts();
        $product = collect($products)->firstWhere('id', (int) $id);

        if (!$product)
            abort(404);

        return view('products.show', compact('product'));
    }

    public function edit(string $id)
    {
        $products = $this->getProducts();
        $product = collect($products)->firstWhere('id', (int) $id);

        if (!$product)
            abort(404);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $products = $this->getProducts();
        $found = false;

        foreach ($products as &$product) {
            if ($product['id'] == $id) {
                $product['name'] = $request->name;
                $product['category'] = $request->category;
                $product['type'] = $request->type;
                $product['price'] = (float) $request->price;
                $found = true;
                break;
            }
        }

        if (!$found)
            abort(404);

        $this->saveProducts($products);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(string $id)
    {
        $products = $this->getProducts();
        $exists = collect($products)->contains(
            fn($productItem) => (int) ($productItem['id'] ?? 0) === (int) $id
        );

        if (!$exists) {
            abort(404);
        }

        $filtered = array_filter(
            $products,
            fn($productItem) => (int) ($productItem['id'] ?? 0) !== (int) $id
        );
        $this->saveProducts($filtered);

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}