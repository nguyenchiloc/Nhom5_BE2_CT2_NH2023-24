<!-- Side-Bar -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('profile.index') }}" target="">
            <span class="ms-1 font-weight-bold">Admin</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg width="800px" height="800px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>product</title>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="icon" fill="#000000" transform="translate(64.000000, 34.346667)">
                                    <path d="M192,7.10542736e-15 L384,110.851252 L384,332.553755 L192,443.405007 L1.42108547e-14,332.553755 L1.42108547e-14,110.851252 L192,7.10542736e-15 Z M127.999,206.918 L128,357.189 L170.666667,381.824 L170.666667,231.552 L127.999,206.918 Z M42.6666667,157.653333 L42.6666667,307.920144 L85.333,332.555 L85.333,182.286 L42.6666667,157.653333 Z M275.991,97.759 L150.413,170.595 L192,194.605531 L317.866667,121.936377 L275.991,97.759 Z M192,49.267223 L66.1333333,121.936377 L107.795,145.989 L233.374,73.154 L192,49.267223 Z" id="Combined-Shape">

                                </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Sản phẩm</span>
                </a>
            </li>
            <!-- Category -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="50x" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6.5C3 3.87479 3.02811 3 6.5 3C9.97189 3 10 3.87479 10 6.5C10 9.12521 10.0111 10 6.5 10C2.98893 10 3 9.12521 3 6.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M14 6.5C14 3.87479 14.0281 3 17.5 3C20.9719 3 21 3.87479 21 6.5C21 9.12521 21.0111 10 17.5 10C13.9889 10 14 9.12521 14 6.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 17.5C3 14.8748 3.02811 14 6.5 14C9.97189 14 10 14.8748 10 17.5C10 20.1252 10.0111 21 6.5 21C2.98893 21 3 20.1252 3 17.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14 17.5C14 14.8748 14.0281 14 17.5 14C20.9719 14 21 14.8748 21 17.5C21 20.1252 21.0111 21 17.5 21C13.9889 21 14 20.1252 14 17.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Loại</span>
                </a>
            </li>
            <!-- Brand -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('brand.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            viewBox="0 0 290.476 290.476" xml:space="preserve">
                            <g>
                                <g>
                                    <polygon style="fill:#F9BA48;" points="161.905,42.857 0,204.762 85.714,290.476 247.619,128.571 233.333,57.143 		"/>
                                    <path style="fill:#333333;" d="M76.757,213.729c-0.138-3.762-1.667-7.276-4.343-9.952c-5.795-5.795-15.224-5.795-21.019,0
                                        l-15.271,15.271l35.305,35.305L86.7,239.081c2.81-2.805,4.357-6.538,4.357-10.51c0-3.971-1.548-7.705-4.357-10.51
                                        C83.948,215.31,80.371,213.862,76.757,213.729z M79.967,232.348l-8.538,8.538l-21.838-21.838l8.538-8.538
                                        c2.086-2.076,5.467-2.076,7.552,0c1.01,1.01,1.567,2.348,1.567,3.776c0,1.429-0.557,2.767-1.567,3.776l-7.143,7.143l6.733,6.733
                                        l7.143-7.143c2.086-2.076,5.467-2.076,7.552,0c1.01,1.01,1.567,2.348,1.567,3.776C81.533,230,80.976,231.338,79.967,232.348z"/>
                                    <path style="fill:#333333;" d="M158.538,96.633l-8.129,8.129l35.305,35.305l8.129-8.129c4.714-4.714,7.314-10.986,7.314-17.652
                                        s-2.6-12.938-7.314-17.652C184.105,86.9,168.276,86.9,158.538,96.633z M187.11,125.205l-1.395,1.395l-21.838-21.838l1.395-1.395
                                        c6.019-6.019,15.819-6.019,21.838,0c2.914,2.919,4.524,6.795,4.524,10.919C191.633,118.41,190.024,122.286,187.11,125.205z"/>
                                    <path style="fill:#333333;" d="M106.733,219.048l-28.571-28.571l8.538-8.538c2.086-2.076,5.467-2.076,7.552,0
                                        c1.01,1.01,1.567,2.348,1.567,3.776c0,1.429-0.557,2.767-1.567,3.776l-7.143,7.143l6.733,6.733l6.895-6.895l17.857,10.714
                                        l6.943-6.943l-20.419-12.252c0.114-0.752,0.224-1.505,0.224-2.281c0-3.971-1.548-7.705-4.357-10.51
                                        c-5.795-5.795-15.224-5.795-21.019,0l-15.271,15.276L100,225.781L106.733,219.048z"/>
                                    <path style="fill:#333333;" d="M135.305,190.476l-14.286-14.286l12.314-12.314l14.286,14.286l6.733-6.733l-35.305-35.305
                                        l-25.781,25.781l35.305,35.305L135.305,190.476z M106.733,161.905l12.314-12.314l7.552,7.552l-12.314,12.314L106.733,161.905z"/>
                                    <polygon style="fill:#333333;" points="182.924,142.857 147.619,107.552 140.886,114.286 161.7,135.105 127.01,128.162 
                                        121.838,133.333 157.143,168.638 163.876,161.905 143.057,141.086 177.752,148.029 		"/>
                                    <path style="fill:#333333;" d="M240.476,0c-26.767,0-48.624,21.157-49.881,47.619h9.524c1.243-21.21,18.838-38.095,40.357-38.095
                                        c22.319,0,40.476,18.157,40.476,40.476s-18.157,40.476-40.476,40.476c-4.643,0-9.114-0.867-13.338-2.333
                                        c0.914-2.224,1.433-4.643,1.433-7.19c0-10.505-8.543-19.048-19.048-19.048s-19.048,8.543-19.048,19.048S199.019,100,209.524,100
                                        c4.333,0,8.286-1.51,11.49-3.957c6.043,2.548,12.624,3.957,19.462,3.957c27.571,0,50-22.429,50-50S268.048,0,240.476,0z
                                        M219.048,80.952c0,1.062-0.214,2.062-0.533,3.014c-4.738-3.067-8.81-7.138-11.962-12.019c0.938-0.31,1.924-0.519,2.971-0.519
                                        C214.776,71.429,219.048,75.7,219.048,80.952z M209.524,90.476c-5.252,0-9.524-4.271-9.524-9.524c0-0.505,0.071-0.986,0.148-1.467
                                        c3.071,4.214,6.767,7.824,10.89,10.838C210.543,90.405,210.043,90.476,209.524,90.476z"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Thương hiệu</span>
                </a>
            </li>
            <!-- Price -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('price.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            viewBox="0 0 290.476 290.476" xml:space="preserve">
                            <path d="M99.192,106.263l-2.517,2.517c-2.996,2.997-7.865,3.007-10.875,0.03c-0.011-0.011-0.022-0.023-0.034-0.034
                                c-1.456-1.456-2.258-3.393-2.258-5.452c0-2.06,0.802-3.996,2.259-5.453l2.517-2.517L99.192,106.263z M129.017,109.202
                                c0-2.06-0.802-3.997-2.259-5.454c-1.458-1.457-3.395-2.26-5.455-2.26c-2.06,0-3.997,0.803-5.454,2.259l-2.515,2.515l10.908,10.908
                                l2.515-2.515C128.214,113.2,129.017,111.263,129.017,109.202z M213.497,71.543c0,1.326-0.527,2.598-1.464,3.536L75.079,212.032
                                c-0.977,0.976-2.256,1.464-3.536,1.464s-2.559-0.488-3.536-1.464L1.464,145.489c-1.953-1.953-1.953-5.119,0-7.071L138.418,1.465
                                c1.953-1.952,5.118-1.952,7.071,0l66.544,66.543C212.97,68.946,213.497,70.217,213.497,71.543z M131.314,124.243l2.515-2.515
                                c3.346-3.346,5.188-7.794,5.188-12.525c0-4.731-1.843-9.18-5.188-12.524c-3.346-3.346-7.794-5.189-12.525-5.189
                                c-4.731,0-9.18,1.843-12.525,5.188l-2.514,2.515L95.356,88.284l11.504-11.504c1.953-1.953,1.953-5.119,0-7.071
                                c-1.953-1.952-5.118-1.952-7.071,0L88.284,81.213l-1.695-1.695c-1.952-1.951-5.117-1.952-7.071,0c-1.953,1.953-1.953,5.119,0,7.071
                                l1.695,1.695L78.697,90.8c-3.346,3.345-5.188,7.793-5.188,12.524c0,4.709,1.826,9.139,5.144,12.479
                                c0.016,0.016,0.031,0.032,0.047,0.048c3.453,3.453,7.988,5.179,12.523,5.179c4.535,0,9.071-1.726,12.523-5.179l2.517-2.517
                                l10.908,10.908l-11.505,11.505c-1.953,1.953-1.953,5.119,0,7.071c0.976,0.976,2.256,1.464,3.536,1.464s2.559-0.488,3.536-1.464
                                l11.505-11.505l2.665,2.665c0.977,0.976,2.256,1.464,3.536,1.464c1.279,0,2.559-0.488,3.536-1.464c1.953-1.953,1.953-5.119,0-7.071
                                L131.314,124.243z"/>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Giá</span>
                </a>
            </li>
            <!-- Customer -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customer.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="32px" height="32px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path class="color-background opacity-6" d="M15.5385 11.4899C17.7949 11.4899 19.641 9.65316 19.641 7.40826C19.641 5.16336 17.7949 3.32663 15.5385 3.32663C15.4359 3.32663 15.3334 3.32663 15.2308 3.32663C15.8462 4.34704 16.2564 5.57153 16.2564 6.79602C16.2564 8.53071 15.5385 10.1634 14.4103 11.3879C14.718 11.4899 15.1282 11.4899 15.5385 11.4899Z" fill="#030D45"/>
                            <path class="color-background opacity-6" d="M17.2821 13.6326H16.2565C17.7949 14.9591 18.8206 17 18.8206 19.2448C18.8206 19.7551 18.718 20.1632 18.6154 20.5714C19.9488 20.3673 20.7693 20.0612 21.2821 19.7551C21.7949 19.4489 22.0001 18.9387 22.0001 18.3265C22.0001 15.7755 19.8462 13.6326 17.2821 13.6326Z" fill="#030D45"/>
                            <path class="color-background" d="M9.38459 11.4898C10.6154 11.4898 11.641 11.0817 12.5641 10.2654C13.5897 9.44903 14.1025 8.1225 14.1025 6.79597C14.1025 5.77556 13.7948 4.75515 13.1795 4.04087C12.3589 2.81638 11.0256 2.00005 9.38459 2.00005C6.82049 2.00005 4.66664 4.14291 4.66664 6.69393C4.66664 9.34699 6.82049 11.4898 9.38459 11.4898Z" fill="#030D45"/>
                            <path class="color-background" d="M12.1538 13.9389C11.8462 13.9389 11.641 13.8369 11.3333 13.8369H7.4359C4.46154 13.8369 2 16.2859 2 19.245C2 19.9593 2.30769 20.4695 2.82051 20.8777C3.64103 21.3879 5.58974 22.0001 9.38461 22.0001C13.1795 22.0001 15.0256 21.3879 15.9487 20.8777C15.9487 20.8777 16.0513 20.7757 16.1538 20.7757C16.5641 20.4695 16.8718 19.9593 16.8718 19.245C16.7692 16.592 14.8205 14.3471 12.1538 13.9389Z" fill="#030D45"/>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Tài khoản</span>
                </a>
            </li>
            <!-- Order/Bill -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bills.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg id="Layer_1" style="enable-background:new 0 0 30 30;" version="1.1" viewBox="0 0 30 30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M7,22  V4h18v18c0,2.209-1.791,4-4,4" style="fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"/><path d="M17,22  L17,22H4l0,0c0,2.209,1.791,4,4,4h13C18.791,26,17,24.209,17,22z" style="fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"/><line style="fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" x1="15" x2="21" y1="13" y2="13"/><line style="fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" x1="11" x2="13" y1="13" y2="13"/><line style="fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" x1="15" x2="21" y1="17" y2="17"/><line style="fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" x1="11" x2="13" y1="17" y2="17"/><line style="fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" x1="15" x2="21" y1="9" y2="9"/><line style="fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" x1="11" x2="13" y1="9" y2="9"/>
                        <path d="M17,22L17,22H4l0,0c0,2.209,1.791,4,4,4h13C18.791,26,17,24.209,17,22z"/></svg>
                    </div>
                    <span class="nav-link-text ms-1">Hóa đơn</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Sidebar Section Header</h6>
            </li>
        </ul>
    </div>
</aside>
<!-- End of Side-Bar -->