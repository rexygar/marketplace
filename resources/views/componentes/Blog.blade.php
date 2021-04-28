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
<div
  class="col-span-12 grid grid-cols-12 h-full md:px-6 lg:px-16 xl:px-16 2xl:px-16 pt-6 pb-36 md:pt-6 md:pb-36 lg:pt-6 lg:pb-36 xl:pt-6 xl:pb-36 2xl:pt-6 2xl:pb-36">

  <div class="col-span-12 grid gap-4 grid-cols-12 py-4 xs:px-6 sm:px-16 md:px-16 lg:px-16 2xl:px-16 xl:px-16 ">



    <div
      class="col-span-12 lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 grid grid-cols-12  md:grid-flow-row row-span-2">
      <div
        class="col-span-12  lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 grid grid-cols-3  px-2  py-6">
        <div class="col-span-3 ">
          <div class="col-span-12 font-black text-3xl">
            <h1 class="col-span-12 text-center py-5 font-black text-6xl">Post Nro 1</h1>
          </div>
          <img class="col-span-12 " src="{{ asset('img/BLOG/BLOG.png') }}" alt="">
        </div>
        <div class="col-span-3">
          <article class="media">

            <div class="media-content">
              <div class="content">
                <p class="text-black text-xl pl-16">
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque
                  tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                  <br>
                  <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                </p>
              </div>
              <nav class="level is-mobile pl-16">
                <div class="level-left">
                  <a class="level-item">
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                  </a>
                  <a class="level-item">
                    <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                  </a>
                  <a class="level-item">
                    <span class="icon is-small"><i class="fas fa-heart"></i></span>
                  </a>
                </div>
              </nav>
            </div>
            <div class="media-right">
              <button class="delete"></button>
            </div>
          </article>
        </div>
      </div>




    </div>




    <div class="col-span-12 text-center">
      <p class="py-3 px-6 font-black text-base text-gray-700  w-full capitalize "> el marketplace de quillota que busca
        posicionar los
        emprendedores locales y fomentar su negocio ... Velit ea aliqua et minim. Labore eu reprehenderit elit irure
        pariatur. Pariatur elit magna non eiusmod. Tempor mollit incididunt nisi aute deserunt minim nostrud quis do et
        anim occaecat laborum. Ea voluptate duis incididunt esse eiusmod minim et adipisicing. </p>
    </div>
    <div></div>


  </div>

  <div
    class="col-span-12 grid grid-cols-7  pt-16 lg:pt-16 sm:pt-10   md:pt-16 xl:pt-16 2xl:pt-16 pb-6  xs:px-6 sm:px-16 md:px-16 lg:px-36 2xl:px-36 xl:px-36 ">

  </div>





</div>