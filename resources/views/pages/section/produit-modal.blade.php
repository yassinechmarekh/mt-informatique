<!-- Product Modal 1 start -->
@foreach ($produits as $produit)
    <div
    class="modal fade quickview-modal-style"
    id="exampleModal{{ $produit->id }}"
    tabindex="-1"
    role="dialog"
    >
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <a
            href="#"
            class="close"
            data-bs-dismiss="modal"
            aria-label="Close"
            ><i class="ti-close"></i
        ></a>
        </div>
        <div class="modal-body">
        <div class="row gx-0">
            <div class="col-lg-5 col-md-5 col-12">
            <div class="modal-img-wrap">
                <img src="{{asset('assets/store/images/product/' . $produit->ImagePrincipale)}}" alt="" />
            </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12">
            <div class="product-details-content quickview-content">
                <h2>{{ $produit->titre }}</h2>
                <div class="product-details-price">
                <span class="old-price">{{ $produit->AncienPrix }}</span>
                <span class="new-price">{{ $produit->NouveauPrix }}</span>
                </div>
                @php
                    $reviews = App\Models\Review::where('product_id',$produit->id)->get();
                @endphp
                <div class="product-details-review">
                    <div class="review-rating">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < intval($reviews->avg('rating')))
                                <i class="ti-star filled"></i>
                            @else
                                <i class="ti-star"></i>
                            @endif
                        @endfor
                    </div>
                    <span>{{ $reviews->count() }} Avis Client</span><br /><br /><br />
                </div>

                <p>
                    <br>
                    {{ Str::limit($produit->DescriptionModal,450) }}
                </p>
                <div class="product-details-action-wrap">
                    <form action="{{ route('ajouter.panier') }}" method="POST">
                        @csrf
                        <input type="hidden" id="idProduit" name="idProduit" value="{{ $produit->id }}">
                        <div class="product-quality">
                            <input
                                class="cart-plus-minus-box input-text qty text"
                                name="quantite"
                                value="1"
                            />
                        </div>
                        <div class="single-product-cart btn-hover">
                            <button type="submit">Ajouter au panier</button>
                        </div>
                    </form>
                    @php
                        $isInWishlist = false;
                        if(session('wishlist')) {
                            foreach (session('wishlist') as $wishlist) {
                                if ($wishlist['idproduit'] == $produit->id) {
                                    $isInWishlist = true;
                                    break;
                                }
                            }
                        }
                    @endphp
                    @if($isInWishlist)
                        <div class="single-product-wishlist">
                            <a title="Wishlist" href="{{ route('supprimer.wishlist',$produit->id) }}">
                                <i class="bi bi-heart-fill" style="color:#4fbcc9;"></i>
                            </a>
                        </div>
                    @else
                        <div class="single-product-wishlist">
                            <a title="Wishlist" href="{{ route('ajouter.wishlist.id',$produit->id) }}"><i class="pe-7s-like"></i></a>
                        </div>
                    @endif
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
@endforeach
<!-- Product Modal end -->
