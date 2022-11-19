<?php
session_start();
if (isset($_SESSION['adminid'])) {
    include_once 'config.php';
    include 'header.php';
    ?>


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Furniture</a></li>
                                <li class="breadcrumb-item active">Order</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Orders</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                <div class="card-box table-responsive">
                        <h3 class="header-title">Orders Details</h3>
                        <br>
                        <table style="width: 60% ;">
                            <tbody>
                                <tr>
                                    <td>
                                    <a href="orderfilter.php?ofid=All Orders" class="btn " style="background-color: #336699 ; border-radius: 25px;">All Orders</a>
                                    </td>
                                    <td>
                                    <a href="orderfilter.php?ofid=On Hold" class="btn " style="background-color: #336699 ; border-radius: 25px;">On Hold</a>
                                    </td>
                                    <td>
                                    <a href="orderfilter.php?ofid=Recieved" class="btn " style="background-color: #336699 ; border-radius: 25px;">Recieved</a>
                                    </td>
                                    <td>
                                    <a href="orderfilter.php?ofid=Processing" class="btn " style="background-color: #336699 ; border-radius: 25px;">Processing</a>
                                    </td>
                                    <td>
                                    <a href="orderfilter.php?ofid=Dispatched" class="btn " style="background-color: #336699 ; border-radius: 25px;">Dispatched</a>
                                    </td>
                                    <td>
                                    <a href="orderfilter.php?ofid=Shipped" class="btn " style="background-color: #336699 ; border-radius: 25px;">Shipped</a>
                                    </td>
                                    <td>
                                    <a href="orderfilter.php?ofid=Returned" class="btn " style="background-color: #336699 ; border-radius: 25px;">Returned</a>
                                    </td>
                                    <td>
                                    <a href="orderfilter.php?ofid=Completed" class="btn " style="background-color: #336699 ; border-radius: 25px;">Completed</a>
                                    </td>
                                    <td>
                                    <a href="orderfilter.php?ofid=Cancelled" class="btn " style="background-color: #336699 ; border-radius: 25px;">Cancelled</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                        
                        <?php
                            $or_query="SELECT * from `pro_order`";
                            $or_result=mysqli_query($conn,$or_query);  
                            while($o_row=mysqli_fetch_assoc($or_result))
                            {
                            $user_query="SELECT * from `user` where `user_id` =".$o_row['user_id'];
                            $user_result=mysqli_query($conn,$user_query); 
                            $user_row=mysqli_fetch_assoc($user_result);

                            $usera_query="SELECT * from `user_address` where `add_id` =".$o_row['order_address'];
                            $usera_result=mysqli_query($conn,$usera_query); 
                            $usera_row=mysqli_fetch_assoc($usera_result);

                            $bi_query="SELECT * from `billing_info` where `order_id` =".$o_row['order_id'];
                            $bi_result=mysqli_query($conn,$bi_query); 
                            $bi_row=mysqli_fetch_assoc($bi_result);
                            
                        ?>
                        <div class="card-box table-responsive">
                        <table id="datatable-buttons" class="table dt-responsive "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <td style="font-weight: bold ;">Order Id: </td>
                                    <td>#<?php echo $o_row['order_id'];?></td>
                                    <td style="font-weight: bold ;">Customer Name: </td>
                                    <td><?php echo $user_row['user_name'];?></td>
                                    <td style="font-weight: bold ;">Order Date / Time: </td>
                                    <td><?php echo $o_row['order_date'];?> - <?php echo $o_row['order_time'];?></td>
                                    <td style="font-weight: bold ;">Total Bill: </td>
                                    <td>$ <?php echo $o_row['order_total'];?></td>
                                    
                                </tr>
                                <tr>
                                <td style="font-weight: bold ;">Billing Type: </td>
                                    <td><?php echo $bi_row['billing_type'];?></td>
                                    <td style="font-weight: bold ;">Card #: </td>
                                    <td><?php echo $bi_row['card_no'];?></td>
                                    <td style="font-weight: bold ;">Other Notes: </td>
                                    <td ><?php echo $o_row['order_notes'];?></td>
                                    <td style="font-weight: bold ;">Action</td>
                                    <td>
                                    <a href="orderupdate.php?ouid=<?php echo $o_row['order_id']; ?>"
                                            class="btn " style="background-color: #336699 ;">Update Status</a></td>
                                </tr>
                            </thead>

                            <thead>
                                <tr style="background-color: #eeeeee; color: #3c4452; border-color: #336699;">
                                    <th scope="col">Product Id</th>
                                    <th scope="col" colspan="2">Product</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col" colspan="2">Status</th>

                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                    $query="SELECT * from `pro_order` po join `order_invoice` oi on oi.order_id=po.order_id  join `product` p on oi.pro_id=p.pro_id join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id where po.order_id=".$o_row['order_id'];
                                    $result=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_array($result))
                                    {
                                ?>
                                <tr>
                                    <th scope="row"> <?php echo $row['pro_id'];?></th>
                                    <td colspan="2"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pro_img1']);?>"
                                            width="50px" height="50px" style="border-radius: 50%;" /> &nbsp; <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pro_img2']);?>"
                                            width="50px" height="50px" style="border-radius: 50%;" /> &nbsp;<?php echo $row['pro_name'];?></td>
                                    <td><?php echo $row['maincat_name'];?> / <?php echo $row['cat_name'];?> / <?php echo $row['subcat_name'];?></td>
                                    <td><?php echo $row['pro_price'];?></td>
                                    <td><?php echo $row['inv_pro_quantity'];?></td>
                                    <td colspan="2"><?php echo $row['order_status'];?></td>
                                    

                                </tr>

                                <?php
                                    }
                                ?>
                            </tbody>

                            <thead>
                                <tr style="background-color: #eeeeee; color: #3c4452; border-color: #336699;">
                                    <th scope="col">Shipping</th>
                                    <th scope="col" colspan="2">Address</th>
                                    <th scope="col" colspan="2">Different Address</th>
                                    <th scope="col" colspan="3">Other Notes</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><?php echo $o_row['shipping'];?></td>
                                    <td colspan="2"><?php echo $usera_row['street_add_1'];?>, <?php echo $usera_row['street_add_2'];?>,
                                        <?php echo $usera_row['city'];?>, <?php echo $usera_row['state'];?>,
                                        <?php echo $usera_row['zip'];?></td>
                                    <td colspan="2"><?php echo $o_row['order_diff_addr'];?></td>
                                    <td colspan="3"><?php echo $o_row['order_notes'];?></td>
                                </tr>
                            </tbody>

                            <br/><br/>
                            
                            </table>
                            </div>
                        <?php
                            }
                        ?>
                      


                    
                </div>
            </div>
        </div>

 

        <?php
        include 'footer.php';
    } else {
        header('location:login.php');
    }
        ?>