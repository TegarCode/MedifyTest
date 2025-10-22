<div id="filter-container">
    <h4>Filter Pasien</h4>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Nama Pasien</label>
                <input type="text" class="form-control" id="filter-nama" placeholder="Cari nama pasien...">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" id="filter-jenis-kelamin">
                    <option value="">-- Semua --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
    </div>

    <button class="btn btn-primary mt-2 btn-get-data">Filter</button>
    <span id="loading-filter" style="display: none;">Loading...</span>
</div>
