@extends('user.layouts.app')
@section('user-content')
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-vendor-block">
                                <div class="ec-vendor-block-items">
                                    <ul>
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="user-history.html">History</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="user-invoice.html">Invoice</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-shop-rightside col-lg-9 col-md-12">
                    <div class="ec-vendor-dashboard-card ec-vendor-setting-card">
                        <div class="ec-vendor-card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ec-vendor-block-profile">
                                        <div class="ec-vendor-block-img space-bottom-30">
                                            <div class="ec-vendor-block-bg">
                                                <a href="#" class="btn btn-lg btn-primary"
                                                   data-link-action="editmodal" title="Edit Detail"
                                                   data-bs-toggle="modal" data-bs-target="#edit_modal">Edit Detail</a>
                                            </div>
                                            <div class="ec-vendor-block-detail">
                                                <img class="v-img" src="assets/images/user/1.jpg" alt="vendor image">
                                                <h5 class="name">Mariana Johns</h5>
                                                <p>( Business Man )</p>
                                            </div>
                                            <p>Hello <span>Mariana Johns!</span></p>
                                            <p>From your account you can easily view and track orders. You can manage and change your account information like address, contact information and history of orders.</p>
                                        </div>
                                        <h5>Account Information</h5>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="ec-vendor-detail-block ec-vendor-block-email space-bottom-30">
                                                    <h6>E-mail address <a href="javasript:void(0)" data-link-action="editmodal" title="Edit Detail" data-bs-toggle="modal" data-bs-target="#edit_modal"><img src="assets/images/icons/edit.svg"
                                                                                                                                                                                                             class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Email 1 : </strong>support1@exapmle.com</li>
                                                        <li><strong>Email 2 : </strong>support2@exapmle.com</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="ec-vendor-detail-block ec-vendor-block-contact space-bottom-30">
                                                    <h6>Contact nubmer<a href="javasript:void(0)" data-link-action="editmodal" title="Edit Detail" data-bs-toggle="modal" data-bs-target="#edit_modal"><img src="assets/images/icons/edit.svg"
                                                                                                                                                                                                            class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Phone Nubmer 1 : </strong>(123) 123 456 7890</li>
                                                        <li><strong>Phone Nubmer 2 : </strong>(123) 123 456 7890</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="ec-vendor-detail-block ec-vendor-block-address mar-b-30">
                                                    <h6>Address<a href="javasript:void(0)" data-link-action="editmodal" title="Edit Detail" data-bs-toggle="modal" data-bs-target="#edit_modal"><img src="assets/images/icons/edit.svg"
                                                                                                                                                                                                     class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Home : </strong>123, 2150 Sycamore Street, dummy text of
                                                            the, San Jose, California - 95131.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="ec-vendor-detail-block ec-vendor-block-address">
                                                    <h6>Shipping Address<a href="javasript:void(0)" data-link-action="editmodal" title="Edit Detail" data-bs-toggle="modal" data-bs-target="#edit_modal"><img src="assets/images/icons/edit.svg"
                                                                                                                                                                                                              class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Office : </strong>123, 2150 Sycamore Street, dummy text of
                                                            the, San Jose, California - 95131.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
