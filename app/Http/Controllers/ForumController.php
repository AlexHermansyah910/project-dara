<?php

namespace App\Http\Controllers;

use App\Models\BalasComment;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function getPostingan()
    {
        $search = request()->input('search');
        $tanggalawal = request()->input('tanggal_dari');
        $tanggalakhir = request()->input('tanggal_sampai');

        $query = Post::query();
        
        if ($search) {
            $query->where('text', 'LIKE', '%' . $search . '%')
                  ->orWhereHas('pendonor', function ($q) use ($search) {
                      $q->where('kode_pendonor', 'LIKE', '%' . $search . '%')
                        ->orWhere('nama', 'LIKE', '%' . $search . '%');
                  });
        }

        if ($tanggalawal && $tanggalakhir) {
            $query->whereBetween('created_at', [$tanggalawal . ' 00:00:00', $tanggalakhir . ' 23:59:59']);
        }

        $postingan = $query->get();
        return view('partials.forum-postingan', compact('postingan'));
    }

    public function getKomentar($id_post)
    {
        $post = Post::find($id_post);
        $komentar = $post->comments; // Ambil komentar untuk postingan tertentu
        return view('partials.forum-komentar', compact('komentar'));
    }

    public function getBalasan($id_comment)
    {
        $comment = Comment::find($id_comment);
        $balas = $comment->reply; // Ambil komentar untuk postingan tertentu
        return view('partials.forum-balasan', compact('balas'));
    }

    public function deletepostingan($id)
    {
        $postingan = Post::find($id);
    
        if ($postingan) {
            $komentar = Comment::where('id_post', $postingan->id)->get();
    
            if ($komentar) {
                // Hapus semua komentar yang terkait
                foreach ($komentar as $comment) {
                    BalasComment::where('id_comment', $comment->id)->delete();
                }
    
                // Hapus semua komentar yang terkait
                $komentar->each->delete();
            }
    
            $postingan->delete();
    
            return redirect()->route('forum-postingan')->with('success', 'Postingan berhasil dihapus.');
        }
    
        return redirect()->route('forum-postingan')->with('error', 'Postingan tidak ditemukan.');
    }
    
}
