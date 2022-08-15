<!DOCTYPE html>
<!-- saved from url=(0052)https://dalahcoffee.rgbksa.com/tmp/inv/101010171/smp -->
<html dir="ltr" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title> فاتورة مبيعات نقدية | #101010171 | مؤسسة قهوة الدلة التجارية فرع مكتب جوهرة امجاد للخدمات التجارية </title>

    <style>
    </style>
  </head>

  <body cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1065.0" data-gr-ext-installed="">


  <div dir="ltr">
    <div dir="rtl" class="printable-page page-roll-80 simplified-tax-invoice d-flex flex-column flex-gap-3 cut-after-page">
        <br>
        <form action="{{url('downloadPDF')}}" method="get">
            @csrf
            <div class="ln_solid">

                        <button  type='submit' class="btn btn-primary">Export To PDF</button>
            </div><br>
        </form>
      <div class="text-center">
                  <div class="d-flex-center mb-3">
            <img src="images/image1.jpg" height="85" class="mx-auto">
          </div>
                <p class="fs-6">
          مؤسسة قهوة الدلة التجارية فرع مكتب جوهرة امجاد للخدمات التجارية
        </p>
        <p class="fs-5">
          فرع رئيسي
        </p>
      </div>


      <div class="d-flex-center flex-column flex-gap-3">

                  <div class="rounded-lg py-1 px-2 border border-2px ">
            فاتورة ضريبية مبسطة


                      </div>



      </div>


      <div class="row mx-0" style="margin-bottom: calc(-1 * var(--bs-spacer-3));">
                  <div class="col-6 text-center mb-2 px-0" style="">
            <p class="fs-3">الرقم الضريبي</p>
            <p class="fs-4">{{$data->tax_number}}</p>
          </div>
                  <div class="col-6 text-center mb-2 px-0" style="">
            <p class="fs-3">الوقت والتاريخ</p>
            <p class="fs-4">{{$data->date}}</p>
          </div>
                  <div class="col-12 text-center border-top border-bottom py-2 mb-2 px-0" style="">
            <p class="fs-3"></p>
            <p class="fs-4">. شارع محمد بن سحمي, العدل, مدينة جدة, مكة المكرمة, المملكة العربية السعودية, رقم بريدي 22361</p>
          </div>
                  <div class="col-4  mb-2 px-0" style="">
            <p class="fs-3">رقم الفاتورة</p>
            <p class="fs-4">{{$data->id}}</p>
          </div>
                  <div class="col-4 text-center mb-2 px-0" style="">
            <p class="fs-3">العميل</p>
            <p class="fs-4">{{$data->name}}</p>
          </div>
                  <div class="col-4 text-left mb-2 px-0" style="">
            <p class="fs-3">نوع الفاتورة</p>
            <p class="fs-4">{{$data->invoice_type}}</p>
          </div>
                  <div class="col-6 pt-1 border-top pt-2 mb-2 px-0" style="">
            <p class="fs-3">الرقم الضريبي للعميل</p>
            <p class="fs-4">{{$data->cus_tax_number}}</p>
          </div>
                  <div class="col-6 text-left pt-1 border-top pt-2 mb-2 px-0" style="">
            <p class="fs-3">جوال العميل</p>
            <p class="fs-4">{{$data->phone}}+</p>
          </div>
                  <div class="col-12 text-center pt-1 mb-2 px-0" style="">
            <p class="fs-3">عنوان العميل</p>
            <p class="fs-4">{{$data->address}}</p>
          </div>
              </div>


      <div class="border border-2px rounded-lg p-2">


        <div class="d-flex align-items-center flex-gap-2 fs-3">
          <div class="flex-4">اسم الصنف</div>
          <div class="flex-1 nowrap"><span class="ml-1">الكمية</span></div>
          <div class="flex-2 text-center">سعر الوحدة</div>
          <div class="flex-2 text-center">الاجمالي</div>
        </div>

        <hr class="my-2">


        <div class="d-flex flex-column flex-gap-2">
            @foreach ($products as $product)

                <div class="d-flex align-items-center flex-gap-2 border-bottom-dashed pb-2">
                    <div class="flex-4">
                         <p>{{$product->product_name}}</p>
                    </div>
                    <div class="flex-1">{{$product->quantity}}</div>
                    <div class="flex-2 text-center">{{$product->price}}</div>
                    <div class="flex-2 text-center">{{$product->total_price}}</div>
                </div>

          @endforeach
                  </div>

        <hr class="mt-0 mb-2">


        <div class="d-flex flex-column flex-gap-2 mb-2">

          <div class="d-flex align-items-center flex-gap-3">
            <div class="flex-1 fs-3">إجمالي قبل النهائي</div>            <div class="text-center">{{$data->sub_total}}</div>
            <div class="flex-1 fs-3" dir="ltr">Sub total</div>          </div>






                      <div class="d-flex align-items-center flex-gap-3">
              <div class="flex-1 fs-3 nowrap">ضريبة 15%</div>              <div class="text-center">{{$data->total_vat}}</div>
              <div class="flex-1 fs-3 nowrap" dir="ltr">VAT %15</div>            </div>




          <div class="d-flex align-items-center flex-gap-3">
            <div class="flex-1 fs-3">الاجمالي النهائي</div>            <div class="text-center">{{$data->final_total}}</div>
            <div class="flex-1 fs-3" dir="ltr">Final total</div>          </div>
        </div>






            <div>
                                              <div class="border-top border-2px py-2">
                  <div class="d-flex align-items-center">
                                          <div class="flex-1 fs-3 nowrap">
                        دفع نقدي                      </div>
                                        <div class="text-center">{{$data->paid_in_cash}}</div>
                                          <div class="flex-1 fs-3 nowrap" dir="ltr">
                        Paid in cash                      </div>
                                      </div>
                                      <div class="d-flex fs-3">
                      <p class="flex-1">-- آجل في --------------</p>
                      <p class="flex-1 text-center">{{$data->date}}</p>
                      <p class="flex-1" dir="ltr">-- retroactively in --</p>
                    </div>
                                  </div>
                          </div>



            <div class="border-top border-2px d-flex align-items-center pt-1">
              <div class="flex-1 fs-3 py-2">المبلغ المتبقي</div>              <div class="text-center">
                {{$data->change_due}}              </div>
              <div class="flex-1 fs-3 py-2" dir="ltr">Change due</div>            </div>


      </div>




              <div class="d-flex flex-column flex-gap-1 w-max-content mx-auto">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMoAAAAeAQMAAABXBBPSAAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAC1JREFUKJFj+Mx/+DAzPw+PjYHB4Q+f7c+fsee34TH4YG98gGFUalRqVAomBQBbiEFkSlcb0QAAAABJRU5ErkJggg==" style="height: 50px; width: 260px;" alt="barcode">
          <p class="text-center" dir="ltr">
            1 0 1 0 1 0 1 7 1
          </p>
        </div>


              <div class="d-flex-center flex-column flex-gap-3">
                      <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200" height="200" viewBox="0 0 200 200"><rect x="0" y="0" width="200" height="200" fill="#ffffff"></rect><g transform="scale(5.405)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M8 0L8 4L10 4L10 3L12 3L12 4L11 4L11 5L13 5L13 6L12 6L12 7L11 7L11 6L10 6L10 7L9 7L9 5L8 5L8 7L9 7L9 8L10 8L10 7L11 7L11 8L13 8L13 11L12 11L12 10L11 10L11 9L10 9L10 11L11 11L11 12L13 12L13 14L15 14L15 15L14 15L14 16L13 16L13 15L12 15L12 14L11 14L11 13L9 13L9 14L10 14L10 15L9 15L9 17L7 17L7 16L6 16L6 15L7 15L7 14L6 14L6 15L5 15L5 16L6 16L6 17L7 17L7 18L6 18L6 19L5 19L5 20L6 20L6 21L8 21L8 22L5 22L5 21L4 21L4 22L5 22L5 24L4 24L4 23L3 23L3 22L2 22L2 20L4 20L4 19L2 19L2 20L0 20L0 21L1 21L1 22L2 22L2 23L0 23L0 24L1 24L1 25L0 25L0 26L2 26L2 28L0 28L0 29L2 29L2 28L3 28L3 27L4 27L4 28L5 28L5 29L8 29L8 30L10 30L10 31L8 31L8 33L9 33L9 34L11 34L11 35L10 35L10 36L9 36L9 35L8 35L8 37L10 37L10 36L12 36L12 35L13 35L13 34L14 34L14 37L15 37L15 36L16 36L16 35L17 35L17 36L20 36L20 35L18 35L18 34L20 34L20 33L21 33L21 32L22 32L22 33L23 33L23 32L24 32L24 33L26 33L26 36L27 36L27 37L28 37L28 36L29 36L29 37L34 37L34 36L35 36L35 37L37 37L37 36L36 36L36 35L34 35L34 36L32 36L32 35L31 35L31 33L33 33L33 34L34 34L34 33L35 33L35 32L36 32L36 31L34 31L34 33L33 33L33 30L34 30L34 29L35 29L35 27L34 27L34 29L33 29L33 28L31 28L31 27L30 27L30 26L32 26L32 27L33 27L33 26L34 26L34 24L36 24L36 25L35 25L35 26L37 26L37 23L35 23L35 22L36 22L36 21L37 21L37 20L36 20L36 19L34 19L34 20L33 20L33 19L32 19L32 18L33 18L33 17L36 17L36 18L37 18L37 16L35 16L35 14L37 14L37 13L35 13L35 11L34 11L34 12L33 12L33 11L32 11L32 10L34 10L34 9L35 9L35 10L37 10L37 8L33 8L33 9L32 9L32 8L31 8L31 9L26 9L26 8L25 8L25 6L26 6L26 7L27 7L27 5L28 5L28 8L29 8L29 3L26 3L26 4L27 4L27 5L25 5L25 6L24 6L24 7L23 7L23 5L24 5L24 4L25 4L25 3L24 3L24 4L23 4L23 3L22 3L22 2L23 2L23 0L22 0L22 2L21 2L21 3L18 3L18 2L16 2L16 4L15 4L15 5L14 5L14 3L15 3L15 1L14 1L14 0L12 0L12 1L13 1L13 2L11 2L11 1L10 1L10 0ZM16 0L16 1L19 1L19 2L20 2L20 0ZM25 0L25 1L24 1L24 2L25 2L25 1L26 1L26 2L27 2L27 1L26 1L26 0ZM28 0L28 2L29 2L29 0ZM9 2L9 3L10 3L10 2ZM13 2L13 3L14 3L14 2ZM21 3L21 4L17 4L17 7L16 7L16 5L15 5L15 8L14 8L14 6L13 6L13 8L14 8L14 9L15 9L15 10L14 10L14 11L13 11L13 12L14 12L14 13L16 13L16 12L17 12L17 10L18 10L18 11L19 11L19 12L18 12L18 14L16 14L16 15L18 15L18 16L16 16L16 17L15 17L15 16L14 16L14 18L13 18L13 17L10 17L10 19L11 19L11 18L13 18L13 19L12 19L12 22L13 22L13 24L14 24L14 25L11 25L11 23L10 23L10 22L11 22L11 21L9 21L9 23L6 23L6 24L5 24L5 25L6 25L6 26L4 26L4 24L2 24L2 25L3 25L3 26L4 26L4 27L6 27L6 28L10 28L10 26L14 26L14 25L15 25L15 26L16 26L16 28L14 28L14 27L12 27L12 28L11 28L11 29L10 29L10 30L12 30L12 31L11 31L11 32L10 32L10 33L11 33L11 34L13 34L13 33L12 33L12 32L14 32L14 34L16 34L16 33L19 33L19 32L21 32L21 31L20 31L20 30L22 30L22 31L23 31L23 29L24 29L24 30L25 30L25 31L24 31L24 32L26 32L26 33L28 33L28 35L27 35L27 36L28 36L28 35L30 35L30 34L29 34L29 33L28 33L28 31L27 31L27 29L28 29L28 28L29 28L29 26L28 26L28 23L27 23L27 24L26 24L26 23L25 23L25 24L26 24L26 25L22 25L22 24L24 24L24 23L23 23L23 22L25 22L25 21L28 21L28 20L27 20L27 19L26 19L26 17L29 17L29 18L30 18L30 17L29 17L29 16L28 16L28 15L27 15L27 13L26 13L26 12L27 12L27 11L24 11L24 12L23 12L23 13L26 13L26 14L25 14L25 16L26 16L26 17L22 17L22 16L21 16L21 17L20 17L20 14L21 14L21 15L22 15L22 14L21 14L21 13L20 13L20 14L19 14L19 12L20 12L20 11L23 11L23 10L26 10L26 9L22 9L22 8L23 8L23 7L22 7L22 3ZM19 5L19 6L18 6L18 7L17 7L17 8L18 8L18 7L19 7L19 6L20 6L20 7L21 7L21 8L20 8L20 9L18 9L18 10L20 10L20 9L21 9L21 10L22 10L22 9L21 9L21 8L22 8L22 7L21 7L21 6L20 6L20 5ZM0 8L0 9L1 9L1 10L0 10L0 11L1 11L1 13L0 13L0 14L1 14L1 15L0 15L0 17L1 17L1 15L3 15L3 16L2 16L2 17L4 17L4 15L3 15L3 13L2 13L2 11L3 11L3 12L4 12L4 14L5 14L5 12L6 12L6 13L8 13L8 12L9 12L9 11L8 11L8 12L6 12L6 11L7 11L7 10L8 10L8 9L7 9L7 8L4 8L4 9L2 9L2 8ZM15 8L15 9L16 9L16 10L15 10L15 11L16 11L16 10L17 10L17 9L16 9L16 8ZM5 9L5 10L3 10L3 11L6 11L6 10L7 10L7 9ZM31 9L31 10L28 10L28 13L29 13L29 15L30 15L30 16L31 16L31 18L32 18L32 13L33 13L33 14L34 14L34 13L33 13L33 12L32 12L32 13L29 13L29 11L31 11L31 10L32 10L32 9ZM1 10L1 11L2 11L2 10ZM30 14L30 15L31 15L31 14ZM11 15L11 16L12 16L12 15ZM33 15L33 16L34 16L34 15ZM16 17L16 18L15 18L15 19L14 19L14 20L15 20L15 23L16 23L16 22L17 22L17 24L18 24L18 23L19 23L19 22L17 22L17 21L16 21L16 20L18 20L18 19L19 19L19 18L20 18L20 19L21 19L21 21L22 21L22 22L23 22L23 20L24 20L24 21L25 21L25 19L24 19L24 18L20 18L20 17ZM7 18L7 19L6 19L6 20L7 20L7 19L8 19L8 20L9 20L9 19L8 19L8 18ZM15 19L15 20L16 20L16 19ZM22 19L22 20L23 20L23 19ZM29 19L29 20L31 20L31 19ZM32 20L32 21L31 21L31 22L30 22L30 21L29 21L29 23L31 23L31 25L33 25L33 24L34 24L34 21L36 21L36 20L34 20L34 21L33 21L33 20ZM32 21L32 22L31 22L31 23L32 23L32 24L33 24L33 23L32 23L32 22L33 22L33 21ZM20 22L20 25L16 25L16 24L15 24L15 25L16 25L16 26L17 26L17 28L16 28L16 29L15 29L15 30L14 30L14 28L13 28L13 30L14 30L14 31L15 31L15 32L18 32L18 31L19 31L19 30L17 30L17 31L16 31L16 29L19 29L19 27L18 27L18 26L20 26L20 25L21 25L21 28L22 28L22 29L23 29L23 28L22 28L22 25L21 25L21 24L22 24L22 23L21 23L21 22ZM9 23L9 24L10 24L10 23ZM6 24L6 25L7 25L7 26L6 26L6 27L7 27L7 26L8 26L8 27L9 27L9 26L10 26L10 25L7 25L7 24ZM26 25L26 26L27 26L27 27L26 27L26 28L25 28L25 26L23 26L23 27L24 27L24 28L25 28L25 30L26 30L26 28L27 28L27 27L28 27L28 26L27 26L27 25ZM36 28L36 30L37 30L37 28ZM29 29L29 32L32 32L32 29ZM30 30L30 31L31 31L31 30ZM21 34L21 37L24 37L24 36L22 36L22 35L24 35L24 34ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM30 0L30 7L37 7L37 0ZM31 1L31 6L36 6L36 1ZM32 2L32 5L35 5L35 2ZM0 30L0 37L7 37L7 30ZM1 31L1 36L6 36L6 31ZM2 32L2 35L5 35L5 32Z" fill="#000000"></path></g></g></svg>


                      <div class="d-flex flex-column flex-gap-3 text-center">
                              <div>
                  <p>رقم الجوال</p>
                  <p class="fs-5">966549390680</p>
                </div>
                                        </div>
                  </div>






    </div>
  </div>


</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>
