<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'merk' => $this->merk,
            'model' => $this->model,
            'tahun' => $this->tahun,
            'jarak' => $this->jarak,
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'cc' => $this->cc,
            'harga' => $this->harga,
            'nego' => $this->nego,
            'owner' => $this->owner,
            'kontak' => $this->kontak,
            'author' => $this->author
        ];
    }
}
