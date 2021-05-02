<style>
  input[type="radio"],
  input[type="checkbox"] {
    position: relative;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    outline: none;
  }

  input[type="checkbox"]+span:before {
    width: 16px;
    height: 16px;
    border: 1px solid #000;
    content: "\2714";
    color: transparent;
    display: inline-block;
    font-size: 13px;
    margin-right: 5px;
    text-align: center;
    /* new code notice me! */
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }
</style>
<div class="col-span-12 grid grid-cols-12 h-full md:px-6 lg:px-16 xl:px-16 2xl:px-16  animate__fadeInUp animate__animated wow"
  style="background-color: blueviolet;">

  <div
    class="col-span-12 lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 grid grid-cols-12  py-6 md:grid-flow-row row-span-2 pb-36 md:pb-36 lg:pb-36 xl:pb-36 xl:pb-36 2xl:pb-36">
    <div class="col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-6  md:col-span-8 md:col-start-3 rounded-3xl">
      <img class="rounded-3xl" src="{{ asset('/img/QUIENES SOMOS_/BANNER-4.png') }}" alt="">
    </div>
    <div class="col-span-6  lg:col-span-6 md:col-span-12 xl:col-span-6 2xl:col-span-6 grid grid-cols-3  px-2 ">
      <div class="col-span-1 pl-16">

      </div>
      <div class="col-span-3 lg:-mt-16 xl:-mt-16 2xl:-mt-16">
        <article class="media">

          <div class="media-content">
            <div class="content">
              <p class="py-3 px-6 font-black text-2xl text-white text-justify w-full md:py-10 lg:py-3 xl:py-3 2xl:py-3">Conoce los productos y servicios
                que los emprendedores de Quillota tienen para ti.</p>
            </div>
             
          </div>
          <div class="media-right">
            <button class="delete"></button>
          </div>
        </article>
      </div>
    </div>

  </div>





</div>