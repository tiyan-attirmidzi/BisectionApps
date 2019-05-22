<form action="action.php?number=one" method="post">
    <div class="card text-text-center" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title">F(X) = X<sup>2</sup> - X - 6</h5>
            <div class="card-text">
                <div class="form-group">
                    <label for="value_a">Nilai Batas Bawah (a)</label>
                    <input name="value_a" type="int" step="0.01" class="form-control" id="value_a" placeholder="Nilai a" required>
                </div>
                <div class="form-group">
                    <label for="value_b">Nilai Batas Atas (b)</label>
                    <input name="value_b" type="int" step="0.01" class="form-control" id="value_b" placeholder="Nilai b" required>
                </div>
                <div class="form-group">
                    <label for="value_t">Nilai Toleransi</label>
                    <input name="value_t" type="int" step="0.01" class="form-control" id="value_t" placeholder="Nilai Toleransi" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </div>
    </div>
</form>