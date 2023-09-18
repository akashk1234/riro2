<?php include '../connection.php';?>
<!-- modal.html -->
<div class="modal" id="detailsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Order Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="btn btn-light">&times;</span>
                </button>
                
            </div>
            <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                             
                              <th> #  </th>
                              <th> Product</th>
                              <th> Price </th>
                              <th> Quantity </th>
                              <th> Total</th>
                            
  
                            </tr>
                          </thead>
                          <tbody>
                           <?php 
                          $q="select * from user_address inner join product using(product_id) inner join cart using(product_id)";
                          $res=select($q);
                          $i=1;
                          foreach($res as $row)
                          {

                           ?>
                            <tr>
                              <td><?php echo $i++ ?></td>
                              <td><?php echo $row['product_name']; ?></td>
                              <td><?php echo $row['product_price']; ?></td>
                              <td><?php echo $row['quantity']; ?></td>
                              <td><?php echo $row['total']; ?></td>
                              <!-- <td><?php echo $row['product_name']; ?></td> -->
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
