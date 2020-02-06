<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Site Ayarları Listesi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Url</th>
                  <th>Site mail(s)</th>
                  <th>Site e-mail</th>
                  <th>Site telefon</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($bilgi as $bilgi) {  ?>
                <tr>
                  <td><?php echo $bilgi['title']; ?><td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
              <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
