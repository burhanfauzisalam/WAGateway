<div class="card">
              <div class="card-header">
                <h3 class="card-title">Send Bulk Message</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <h2>Kirim Pesan ke Banyak Nomor</h2>
                <form id="bulkForm" method="post">
                    <label>Nomor Tujuan (pisahkan dengan koma atau baris baru):</label><br>
                    <textarea class="form-control form-control-border border-width-2" name="numbers" rows="5" required></textarea><br><br>

                    <label>Pesan:</label><br>
                    <textarea class="form-control form-control-border border-width-2" name="message" rows="4" required></textarea><br><br>

                    <button type="submit" class="btn btn-info">Kirim ke Semua</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>