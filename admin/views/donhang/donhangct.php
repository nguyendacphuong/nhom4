<div class="row">
  <div class="col-12">
    <div class="card">
      <div id="invoice-template" class="card-body p-4">
        <!-- Invoice Company Details -->
        <div id="invoice-company-details" class="row">
          <div class="col-sm-6 col-12 text-center text-sm-left">
            <div class="media row">
              <div class="col-12 col-sm-3 col-xl-2">
              </div>
              <div class="col-12 col-sm-9 col-xl-10">
                <div class="media-body">
                  <ul class="ml-2 px-0 list-unstyled">
                    <li class="text-bold-800">
                      <h2>ZonKer</h2>
                    </li>
                    <li style="width: 200px;">4025 Oak Avenue,Melbourne,Florida 32940,USA</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-12 text-center text-sm-right">
            <h2>Hóa Đơn</h2>
            <p class="pb-sm-3">Mã Hóa Đơn :# <?= $list[0]['id'] ?> </p>
            <ul class="px-0 list-unstyled">
              <li>Tổng Tiền</li>
              <li class="lead text-bold-800"><?= number_format($list[0]['total_price']) ?>vnđ</li>
            </ul>
          </div>
        </div>
        <!-- Invoice Customer Details -->
        <div id="invoice-customer-details" class="row pt-2">
          <div class="col-12 text-center text-sm-left">
            <p style="font-size:35px;" class="text-muted">Gửi tới</p>
          </div>
          <div class="col-sm-6 col-12 text-center text-sm-left">
            <ul class="px-0 list-unstyled">
              <li style="font-size:25px;" class="text-bold-800">Họ và tên:&nbsp;<?= $list[0]['customer_name'] ?></li>
              <li style="width: 200px;">Địa chỉ:&nbsp;<?= $list[0]['customer_address'] ?></li>
              <li style="width: 200px;">Số điện thoại:&nbsp;<?= $list[0]['customer_phone_number'] ?></li>

            </ul>
          </div>
          <div class="col-sm-6 col-12 text-center text-sm-right">
            <p><span class="text-muted">Ngày mua hàng :</span><?= $list[0]['created_at'] ?></p>
            <p><span class="text-muted">Trạng thái :</span><?= $list[0]['id_ttdh'] ?></p>
            <p><span class="text-muted">Ngày sửa :</span> <?= $list[0]['updated_at'] ?></p>
          </div>
        </div>

        <!-- Invoice Items Details -->
        <div id="invoice-items-details" class="pt-2">
          <div class="row">
            <div class="table-responsive col-12">
              <table class="table">

                <thead>
                  <tr>
                    <th>STT</th>
                    <th class="text-center">Ảnh sản phẩm</th>
                    <th class="text-left">Tên sản phẩm</th>
                    <th class="text-right">Số lượng</th>
                    <th class="text-right">Giá tiền</th>
                  </tr>
                </thead>
                <?php foreach ($oder as $index => $item) : ?>
                  <tbody>
                    <tr>
                      <th scope="row"><?= $index + 1 ?></th>
                      <td class="text-center"><img src="<?= IMAGE_URL . $item['thumbnail'] ?> " width="100px"></td>
                      <td>
                        <p><?= $item['title'] ?></p>
                      </td>
                      <td class="text-right"><?= $item['quantity'] ?></td>
                      <td class="text-right"><?= number_format($item['price']) ?>đ</td>
                    </tr>
                  </tbody>
                <?php endforeach; ?>
              </table>
            </div>
          </div>
          <hr style="padding: 15px 0px;">
        </div>
        <!-- Invoice Footer -->
        <div id="invoice-footer">
          <div class="row">
            <div class="col-sm-5 col-12 text-center">
              <div style="margin-left:800px ;" class="col-md-6">
                <form action="<?= ADMIN_URL . 'donhang/update-dh' ?>" method="post">
                  <input type="hidden" name="id" value="<?= $list[0]['id'] ?>">
                  <label style="text-align: left;">Trạng Thái Đơn Hàng</label>
                  <select class="form-control select2" name="id_ttdh" style="width: 100%;margin: 10px 0px;">
                    <?php
                    foreach ($tt as $tts) {
                      extract($tts);
                      echo "<option value = '.$id.'>$name</option>";
                    }
                    ?>
                  </select>
                  <a style="padding: 12px 20px;" href="<?= ADMIN_URL . 'donhang' ?>" class="btn btn-sm btn-danger">Hủy</a>
                  &nbsp;&nbsp;
                  <button type="submit" class="btn btn-info btn-print btn-lg my-1"><i class="la la-paper-plane-o mr-50"></i>Xác Nhận</button>
                </form>
              </div>
            </div>
          </div>