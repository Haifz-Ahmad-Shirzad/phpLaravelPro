<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    private $jsonPath = 'services.json';

    private function getServices()
    {
        if (!Storage::disk('local')->exists($this->jsonPath)) {
            return [];
        }
        return json_decode(Storage::disk('local')->get($this->jsonPath), true) ?? [];
    }

    private function saveServices(array $services)
    {
        Storage::disk('local')->put(
            $this->jsonPath,
            json_encode(array_values($services), JSON_PRETTY_PRINT)
        );
    }

    public function index()
    {
        $services = $this->getServices();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $services = $this->getServices();
        $ids = array_map('intval', array_column($services, 'id'));
        $newId = $ids === [] ? 1 : max($ids) + 1;

        $services[] = [
            'id' => $newId,
            'title' => $request->title,
            'description' => $request->description,
        ];

        $this->saveServices($services);

        return redirect()->route('services.index')
            ->with('success', 'Service created successfully.');
    }

    public function show(string $id)
    {
        $services = $this->getServices();
        $service = collect($services)->firstWhere('id', (int) $id);

        if (!$service)
            abort(404);

        return view('services.show', compact('service'));
    }

    public function edit(string $id)
    {
        $services = $this->getServices();
        $service = collect($services)->firstWhere('id', (int) $id);

        if (!$service)
            abort(404);

        return view('services.edit', compact('service'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $services = $this->getServices();
        $found = false;

        foreach ($services as &$service) {
            if ($service['id'] == $id) {
                $service['title'] = $request->title;
                $service['description'] = $request->description;
                $found = true;
                break;
            }
        }

        if (!$found)
            abort(404);

        $this->saveServices($services);

        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully.');
    }

    public function destroy(string $id)
    {
        $services = $this->getServices();
        $exists = collect($services)->contains(fn($service) => (int) ($service['id'] ?? 0) === (int) $id);

        if (!$exists) {
            abort(404);
        }

        $filtered = array_filter($services, fn($service) => (int) ($service['id'] ?? 0) !== (int) $id);
        $this->saveServices($filtered);

        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully.');
    }
}