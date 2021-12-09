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
                <li class="text-bold-800"><h2>ZonKer</h2></li>
                <li style="width: 200px;">4025 Oak Avenue,Melbourne,Florida 32940,USA</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-12 text-center text-sm-right">
        <h2>Hóa Đơn</h2>
        <p class="pb-sm-3"># INV-001001</p>
        <ul class="px-0 list-unstyled">
          <li>Tổng Tiền</li>
          <li class="lead text-bold-800">$12,000.00</li>
        </ul>
      </div>
    </div>
    <!-- Invoice Company Details -->

    <!-- Invoice Customer Details -->
    <div id="invoice-customer-details" class="row pt-2">
      <div class="col-12 text-center text-sm-left">
        <p style="font-size:35px;" class="text-muted">Gửi tới</p>
      </div>
      <div class="col-sm-6 col-12 text-center text-sm-left">
        <ul class="px-0 list-unstyled">
          <li style="font-size:25px;" class="text-bold-800">Nguyễn Đắc Phương</li>
          <li style="width: 200px;">Tỳ Điện - Phú Hòa - Lương Tài - Bắc Ninh</li>
          
        </ul>
      </div>
      <div class="col-sm-6 col-12 text-center text-sm-right">
        <p><span class="text-muted">Ngày mua hàng :</span> 06/05/2019</p>
        <p><span class="text-muted">Trạng thái :</span> Đang chờ xử lý</p>
        <p><span class="text-muted">Ngày sửa :</span> 10/05/2019</p>
      </div>
    </div>
    <!-- Invoice Customer Details -->

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
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td class="text-center"><img src="#"></td>
                <td>
                  <p>Create PSD for mobile APP</p>
                </td>
                <td class="text-right">120</td>
                <td class="text-right">$2400.00</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td class="text-center"><img src="#"></td>
                <td>
                  <p>iOS Application Development</p>
                </td>
                <td class="text-right">260</td>
                <td class="text-right">$6500.00</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td class="text-center"><img src="#"></td>
                <td>
                  <p>WordPress Template Development</p>
                </td>
                <td class="text-right">300</td>
                <td class="text-right">$6000.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <hr style="padding: 15px 0px;">
      <!-- <div class="row">
        <div class="col-sm-7 col-12 text-center text-sm-left">
          <p class="lead">Payment Methods:</p>
          <div class="row">
            <div class="col-sm-8">
              <div class="table-responsive">
                <table class="table table-borderless table-sm">
                  <tbody>
                    <tr>
                      <td>Bank name:</td>
                      <td class="text-right">ABC Bank, USA</td>
                    </tr>
                    <tr>
                      <td>Acc name:</td>
                      <td class="text-right">Amanda Orton</td>
                    </tr>
                    <tr>
                      <td>IBAN:</td>
                      <td class="text-right">FGS165461646546AA</td>
                    </tr>
                    <tr>
                      <td>SWIFT code:</td>
                      <td class="text-right">BTNPP34</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-12">
          <p class="lead">Total due</p>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>Sub Total</td>
                  <td class="text-right">$14,900.00</td>
                </tr>
                <tr>
                  <td>TAX (12%)</td>
                  <td class="text-right">$1,788.00</td>
                </tr>
                <tr>
                  <td class="text-bold-800">Total</td>
                  <td class="text-bold-800 text-right"> $16,688.00</td>
                </tr>
                <tr>
                  <td>Payment Made</td>
                  <td class="pink text-right">(-) $4,688.00</td>
                </tr>
                <tr class="bg-grey bg-lighten-4">
                  <td class="text-bold-800">Balance Due</td>
                  <td class="text-bold-800 text-right">$12,000.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> -->
    </div>

    <!-- Invoice Footer -->
    <div id="invoice-footer">
      <div class="row">
        <div class="col-sm-5 col-12 text-center">
        	<div class="col-md-6">
        		<form>
                <div class="form-group">
                  <label style="text-align: left;">Trạng Thái Đơn Hàng</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option style="color:black;" selected="selected">Đang chờ xử lý</option>
                    <option style="color:green;">Xác đơn hàng</option>
                    <option style="color:red;">Hủy</option>
                  </select>
                  <br>
                  <a style="padding: 12px 20px;" href="<?= ADMIN_URL . 'donhang' ?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                  <button type="button" class="btn btn-info btn-print btn-lg my-1"><i class="la la-paper-plane-o mr-50"></i>Xác Nhận</button>
                </div>
          	</form>
        </div>
      </div>
    </div>
    <!-- Invoice Footer -->

  </div>