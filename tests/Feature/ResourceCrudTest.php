<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ResourceCrudTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('local');
    }

    public function test_products_complete_the_json_crud_lifecycle(): void
    {
        Storage::disk('local')->put('products.json', json_encode([
            ['id' => 4, 'name' => 'Existing Oil', 'category' => 'Engine Oil', 'type' => 'Engine Oil', 'price' => 80, 'image' => 'images/white5.png'],
        ]));

        $this->get('/products')->assertOk();
        $this->get('/products/create')->assertOk();
        $this->post('/products', [
            'name' => 'New Oil', 'category' => 'Engine Oil', 'type' => 'Engine Oil', 'price' => 120,
        ])->assertRedirect(route('products.index'));

        $products = json_decode(Storage::disk('local')->get('products.json'), true);
        $this->assertSame(5, $products[1]['id']);
        $this->get('/products/5')->assertOk();
        $this->get('/products/5/edit')->assertOk();
        $this->put('/products/5', [
            'name' => 'Updated Oil', 'category' => 'Engine Oil', 'type' => 'Engine Oil', 'price' => 150,
        ])->assertRedirect(route('products.index'));
        $this->assertSame('Updated Oil', json_decode(Storage::disk('local')->get('products.json'), true)[1]['name']);
        $this->delete('/products/5')->assertRedirect(route('products.index'));
        $this->assertCount(1, json_decode(Storage::disk('local')->get('products.json'), true));
    }

    public function test_services_complete_the_json_crud_lifecycle(): void
    {
        Storage::disk('local')->put('services.json', json_encode([
            ['id' => 2, 'title' => 'Existing Service', 'description' => 'Existing description'],
        ]));

        $this->get('/services')->assertOk();
        $this->get('/services/create')->assertOk();
        $this->post('/services', ['title' => 'New Service', 'description' => 'New description'])
            ->assertRedirect(route('services.index'));
        $this->assertSame(3, json_decode(Storage::disk('local')->get('services.json'), true)[1]['id']);
        $this->get('/services/3')->assertOk();
        $this->get('/services/3/edit')->assertOk();
        $this->put('/services/3', ['title' => 'Updated Service', 'description' => 'Updated description'])
            ->assertRedirect(route('services.index'));
        $this->assertSame('Updated Service', json_decode(Storage::disk('local')->get('services.json'), true)[1]['title']);
        $this->delete('/services/3')->assertRedirect(route('services.index'));
        $this->assertCount(1, json_decode(Storage::disk('local')->get('services.json'), true));
    }

    public function test_blog_posts_complete_the_json_crud_lifecycle(): void
    {
        Storage::disk('local')->put('blog.json', json_encode([
            ['id' => 8, 'title' => 'Existing Post', 'content' => 'Existing content'],
        ]));

        $this->get('/blog')->assertOk();
        $this->get('/blog/create')->assertOk();
        $this->post('/blog', ['title' => 'New Post', 'content' => 'New content'])
            ->assertRedirect(route('blog.index'));
        $this->assertSame(9, json_decode(Storage::disk('local')->get('blog.json'), true)[1]['id']);
        $this->get('/blog/9')->assertOk();
        $this->get('/blog/9/edit')->assertOk();
        $this->put('/blog/9', ['title' => 'Updated Post', 'content' => 'Updated content'])
            ->assertRedirect(route('blog.index'));
        $this->assertSame('Updated Post', json_decode(Storage::disk('local')->get('blog.json'), true)[1]['title']);
        $this->delete('/blog/9')->assertRedirect(route('blog.index'));
        $this->assertCount(1, json_decode(Storage::disk('local')->get('blog.json'), true));
    }

    public function test_services_create_the_json_file_on_first_save(): void
    {
        Storage::disk('local')->assertMissing('services.json');

        $this->post('/services', [
            'title' => 'First Service',
            'description' => 'Created from an empty JSON store',
        ])->assertRedirect(route('services.index'));

        Storage::disk('local')->assertExists('services.json');
        $services = json_decode(Storage::disk('local')->get('services.json'), true);
        $this->assertSame([
            ['id' => 1, 'title' => 'First Service', 'description' => 'Created from an empty JSON store'],
        ], $services);
    }

    public function test_blog_creates_the_json_file_on_first_save(): void
    {
        Storage::disk('local')->assertMissing('blog.json');

        $this->post('/blog', [
            'title' => 'First Post',
            'content' => 'Created from an empty JSON store',
        ])->assertRedirect(route('blog.index'));

        Storage::disk('local')->assertExists('blog.json');
        $posts = json_decode(Storage::disk('local')->get('blog.json'), true);
        $this->assertSame([
            ['id' => 1, 'title' => 'First Post', 'content' => 'Created from an empty JSON store'],
        ], $posts);
    }
    public function test_product_validation_rejects_negative_prices(): void
    {
        $this->from('/products/create')->post('/products', [
            'name' => 'Invalid Oil', 'category' => 'Engine Oil', 'type' => 'Engine Oil', 'price' => -1,
        ])->assertRedirect('/products/create')->assertSessionHasErrors('price');

        Storage::disk('local')->assertMissing('products.json');
    }

    public function test_each_resource_returns_404_for_unknown_records(): void
    {
        foreach (['products', 'services', 'blog'] as $resource) {
            $this->get("/$resource/999")->assertNotFound();
            $this->get("/$resource/999/edit")->assertNotFound();
            $validData = match ($resource) {
                'products' => ['name' => 'Valid', 'category' => 'Oil', 'type' => 'Oil', 'price' => 1],
                'services' => ['title' => 'Valid', 'description' => 'Valid'],
                default => ['title' => 'Valid', 'content' => 'Valid'],
            };
            $this->put("/$resource/999", $validData)->assertNotFound();
            $this->delete("/$resource/999")->assertNotFound();
        }
    }
}
