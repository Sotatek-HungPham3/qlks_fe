@extends('index')
@section('title-page', 'Thuê xe')
@section('content')

    <!-- Car Deals -->
    <section class="cruise-deals">
        <!-- Title -->
        <div class="title-wrap">
            <div class="container">
                <div class="travel-title float-left">
                    <h2>Show Images of Room Type:</h2>
                    <div class="select">
                        <span data-placeholder="">Choose your filter</span>
                        <select name="departure" id="filterStatus">
                            <option value="all">All</option>
                            <option value="hot">Hot</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Title -->
        <!-- Cruise Deals Content -->
        <div class="container">
            <div class="cruise-deals-cn clearfix lstImages">

            </div>
        </div>
        <!-- End Cruise Deals Content -->
    </section>
    <!-- End Car Deals -->

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            var slug = '{{ $slug }}';
            var status = 'all';

            getImages(slug, status);

            async function getImages(slug, status) {
                let url = API_URL + `/room-images?slug=${slug}&status=${status}`;
                let data = await getData(url);

                let str = '';
                if (data.length > 0) {
                    for (const item of data) {
                        let hot = '';
                        if (item.is_hot) {
                            hot = ` <figcaption>
                                                    <span style="color: red; font-size: 2em;">HOT</span>
                                                </figcaption>`;
                        }
                        let imageURL = DOMAIN_S3 + '/' + item.url;
                        str += `<!-- Cruise Deal Item -->
                                    <div class="col-xs-6 col-md-4 col-lg-3">
                                        <div class="cruise-deal-item">
                                            <figure class="cruise-img">
                                                <a href="#" title="">
                                                    <img src="${imageURL}" alt="" height="300px;" width="300px;">
                                                </a>

                                                ${hot}
                                            </figure>
                                        </div>
                                    </div>
                                <!-- End Cruise Deal Item -->`;
                    }
                }
                $('.lstImages').html(str);
            }

            $('#filterStatus').change(function () {
                let status = $(this).val();
                getImages(slug, status);
            });
        })
    </script>
@endsection
