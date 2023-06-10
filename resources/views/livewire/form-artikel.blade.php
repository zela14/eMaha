<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>Judul</label>
            <input wire:model="judul" type="text" name="" class="form-control" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea wire:model="deskripsi" name="" id="" cols="30" rows="10" placeholder="Masukkan Deskripsi"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
