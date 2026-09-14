<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminHomeController extends Controller
{
    public function index()
    {
        $homeConfig = Home::first();


        return view('home', compact('homeConfig', 'oferta'));
    }

    public function edit()
    {

        $home = Home::first() ?? new Home();

        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descripcion' => 'required|string|max:300',
            'boton_texto' => 'nullable|string|max:50',
            'boton_enlace' => 'nullable|string|max:255',
            'fondo' => 'nullable|file|mimes:jpeg,png,jpg,webp,jfif|max:5120',
            'banner_header' => 'nullable|file|mimes:jpeg,png,jpg,webp,jfif|max:5120',
            'cards' => 'nullable|array|max:6',
            'cards.*.titulo' => 'nullable|string|max:60',
            'cards.*.imagen' => 'nullable|file|mimes:jpeg,png,jpg,webp,jfif|max:5120',
        ]);

        $homeConfig = Home::first() ?? new Home();

        $homeConfig->titulo = $request->input('titulo');
        $homeConfig->descripcion = $request->input('descripcion');
        $homeConfig->boton_texto = $request->input('boton_texto');
        $homeConfig->boton_enlace = $request->input('boton_enlace');

        if ($request->hasFile('fondo')) {
            if ($homeConfig->fondo) {
                Storage::disk('public')->delete($homeConfig->fondo);
            }
            $homeConfig->fondo = $request->file('fondo')->store('home', 'public');
        }

        if ($request->hasFile('banner_header')) {
            if ($homeConfig->banner_header) {
                Storage::disk('public')->delete($homeConfig->banner_header);
            }
            $homeConfig->banner_header = $request->file('banner_header')->store('home', 'public');
        }

        $cardsInput = $request->input('cards', []);
        $cardsData = [];
        $existingCards = $homeConfig->cards_data ?? [];

        foreach ($cardsInput as $index => $cardData) {
            if (empty($cardData['titulo']) && !$request->hasFile("cards.$index.imagen")) {
                continue;
            }

            $imagenCardPath = $existingCards[$index]['imagen'] ?? null;

            if ($request->hasFile("cards.$index.imagen")) {
                if ($imagenCardPath) {
                    Storage::disk('public')->delete($imagenCardPath);
                }
                $imagenCardPath = $request->file("cards.$index.imagen")->store('home/cards', 'public');
            }

            $cardsData[] = [
                'titulo' => $cardData['titulo'] ?? '',
                'imagen' => $imagenCardPath,
            ];
        }

        $homeConfig->cards_data = $cardsData;
        $homeConfig->save();

        return redirect()->back()->with('success', '¡Home actualizado con éxito!');
    }
}
