<form action="action.php?number=two" method="post">
    <div class="card text-text-center bg-dark text-light" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title">
                <div class="alert alert-primary">
                    F(X) = X<sup>3</sup> - X - 6
                </div>
            </h5>
            <div class="card-text">
                <div class="form-group">
                    <label for="value_a">Nilai Batas Bawah (a)</label>
                    <input name="value_a" type="number" step="0.01" class="form-control" id="value_a" placeholder="Nilai a" required>
                </div>
                <div class="form-group">
                    <label for="value_b">Nilai Batas Atas (b)</label>
                    <input name="value_b" type="number" step="0.01" class="form-control" id="value_b" placeholder="Nilai b" required>
                </div>
                <div class="form-group">
                    <label for="value_t">Nilai Toleransi</label>
                    <input name="value_t" type="number" step="0.01" class="form-control" id="value_t" value="0.001" readonly>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </div>
    </div>
</form>