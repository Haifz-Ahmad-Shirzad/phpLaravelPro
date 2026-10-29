<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    private $jsonPath = 'blog.json';

    private function getPosts()
    {
        if (!Storage::disk('local')->exists($this->jsonPath)) {
            return [];
        }
        return json_decode(Storage::disk('local')->get($this->jsonPath), true) ?? [];
    }

    private function savePosts(array $posts)
    {
        Storage::disk('local')->put(
            $this->jsonPath,
            json_encode(array_values($posts), JSON_PRETTY_PRINT)
        );
    }

    public function index()
    {
        $posts = $this->getPosts();
        return view('blog.index', compact('posts'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $posts = $this->getPosts();
        $ids = array_map('intval', array_column($posts, 'id'));
        $newId = $ids === [] ? 1 : max($ids) + 1;

        $posts[] = [
            'id' => $newId,
            'title' => $request->title,
            'content' => $request->content,
        ];

        $this->savePosts($posts);

        return redirect()->route('blog.index')
            ->with('success', 'Post created successfully.');
    }

    public function show(string $id)
    {
        $posts = $this->getPosts();
        $post = collect($posts)->firstWhere('id', (int) $id);

        if (!$post)
            abort(404);

        return view('blog.show', compact('post'));
    }

    public function edit(string $id)
    {
        $posts = $this->getPosts();
        $post = collect($posts)->firstWhere('id', (int) $id);

        if (!$post)
            abort(404);

        return view('blog.edit', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $posts = $this->getPosts();
        $found = false;

        foreach ($posts as &$post) {
            if ($post['id'] == $id) {
                $post['title'] = $request->title;
                $post['content'] = $request->content;
                $found = true;
                break;
            }
        }

        if (!$found)
            abort(404);

        $this->savePosts($posts);

        return redirect()->route('blog.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy(string $id)
    {
        $posts = $this->getPosts();
        $exists = collect($posts)->contains(fn($post) => (int) ($post['id'] ?? 0) === (int) $id);

        if (!$exists) {
            abort(404);
        }

        $filtered = array_filter($posts, fn($post) => (int) ($post['id'] ?? 0) !== (int) $id);
        $this->savePosts($filtered);

        return redirect()->route('blog.index')
            ->with('success', 'Post deleted successfully.');
    }
}