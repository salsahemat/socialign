@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')

    <div class="cart show-cart" id="cart">
        <i class="bx bx-x cart__close"></i>
        <h2 class="cart__title-center">My Cart</h2>

        <div class="cart__container">
            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/cart-1.png" alt="" class="cart__img">
                </div>
                <div class="cart__details">
                    <h3 class="cart__title">Website Statis free domain</h3>
                    <span class="cart__price">Rp. 1.000.000 - 2.000.000</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">1</span>
                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/cart-1.png" alt="" class="cart__img">
                </div>
                <div class="cart__details">
                    <h3 class="cart__title">Website Statis free domain</h3>
                    <span class="cart__price">Rp. 1.000.000 - 2.000.000</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">1</span>
                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/cart-1.png" alt="" class="cart__img">
                </div>
                <div class="cart__details">
                    <h3 class="cart__title">Website Statis free domain</h3>
                    <span class="cart__price">Rp. 1.000.000 - 2.000.000</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">1</span>
                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>
        </div>

        <div class="cart__prices">
            <span class="cart__prices-item">3 item</span>
            <span class="cart__prices-total">Rp. 1.500.000</span>
        </div>
    </div>

@endsection
