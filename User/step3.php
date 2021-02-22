<?php
  $title = "ຄັດຕິດເອກະສານ";
  $path = "../";
  $links = "";
  $session_path = "../";
  include ("../header-footer/header.php");
?>

<!-- <div style="width: 100%;">
    <div style="width: 46%; float: right;" align="right">
        <form action="step3.php" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalbrand">
                <img src="../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalbrand" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມເອກະສານຕິດຄັດ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                              <div class="col-md-12 col-sm-6 form-control2">
                                  <label>ຊື່ເອກະສານຕິດຄັດ</label>
                                  <input type="file" name="img_path" id="img_path" placeholder="ເອກະສານຕິດຄັດ"
                                      onchange="loadFile(event)">
                                  <i class="fas fa-check-circle "></i>
                                  <i class="fas fa-exclamation-circle "></i>
                                  <small class="">Error message</small>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-dismiss="modal">ຍົກເລີກ</button>
                            <button type="submit" name="btnSave" class="btn btn-outline-primary">ບັນທຶກ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="clearfix"></div><br> -->
<div class="table-responsive2">
<table id="detail_table" class="table table-bordered" style="width: 1000px;">
        <tr>
            <th style="text-align: center;margin: 0 auto;">ລຳດັບ</th>
            <th style="text-align: center;margin: 0 auto;">ສົກປີ</th>
            <th style="text-align: center;">ຕິດຄັດເອກະສານ</th>
            <th style="text-align: center;">ອັບໂຫລດ</th>
        </tr>
        <tr>
          <td style="text-align:center">1</td>
            <td style="text-align:center">2019-2020</td>
            <td style="text-align:center">MOE_ປະເພດ12gd73dfgs4.pdf</td>
            <td style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-upload toolcolor btnUpdate_rate"></a></td>
        </tr>
        <tr>
          <td style="text-align:center">2</td>
            <td style="text-align:center">2018-2019</td>
            <td style="text-align:center">MOE_ປະເພດ12gd73dfgs4.pdf</td>
            <td style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-upload toolcolor btnUpdate_rate"></a></td>
        </tr>
        <tr>
          <td style="text-align:center">3</td>
            <td style="text-align:center">2017-2018</td>
            <td style="text-align:center">MOE_ປະເພດ12gd73dfgs4.pdf</td>
            <td style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-upload toolcolor btnUpdate_rate"></a></td>
        </tr>
        <tr>
          <td style="text-align:center">4</td>
            <td style="text-align:center">2016-2017</td>
            <td style="text-align:center">MOE_ປະເພດ12gd73dfgs4.pdf</td>
            <td style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-upload toolcolor btnUpdate_rate"></a></td>
        </tr>
        <tr>
          <td style="text-align:center">5</td>
            <td style="text-align:center">2020-2021</td>
            <td style="text-align:center">MOE_ປະເພດ12gd73dfgs4.pdf</td>
            <td style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-upload toolcolor btnUpdate_rate"></a></td>
        </tr>
</table>
</div>



<form action="rate" id="formUpdate" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ອັບໂຫລດ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                              <label>ເລືອກແຟ້ມເອກະສານຕິດຄັດ</label>
                              <input type="file" name="img_path" id="img_path"
                                  onchange="loadFile(event)">
                              <i class="fas fa-check-circle "></i>
                              <i class="fas fa-exclamation-circle "></i>
                              <small class="">Error message</small>
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="update" id="btnUpdate" class="btn btn-outline-success"><span class="fa fa-paperclip"></span> ອັບໂຫລດ</button>
                </div>
            </div>
        </div>
    </div>
</form>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};
    $(document).on('click', '.btnUpdate_cust', function() {
          load_data('%%','0');
          function load_data(query, page) {
              $.ajax({
                  url: "fetch_step2.php",
                  method: "POST",
                  data: {
                      query: query,
                      page: page
                  },
                  success: function(data) {
                      $('#result').html(data);
                  }
              });
          }
          });

$(document).ready(function() {
    $('tr.parent')
        .css("cursor", "pointer")
        .attr("title", "Click to expand/collapse")
        .click(function() {
            $(this).siblings('.child-' + this.id).toggle();
        });
    $('tr[@class^=child-]').hide().children('td');
});


  $('.plus').on('click', function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) + parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
  });
  $('.minus').on('click', function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) + parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
  });

$("#num1").change(function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) + parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
})
$("#num2").change(function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) + parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
})

$("#num3").change(function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) + parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
})
$("#num4").change(function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) + parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
})

$("#num5").change(function() {
    $("#total4").val(parseInt($("#num3").val()) + parseInt($('#num4').val()));
    $("#total5").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
})
</script>


<?php
 include ("../header-footer/footer.php");
?>
