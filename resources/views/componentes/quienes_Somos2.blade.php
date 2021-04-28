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
  class="col-span-12 grid grid-cols-12 h-full md:px-6 lg:px-16 xl:px-16 2xl:px-16 "style="background-color: blueviolet;">

  <div
    class="col-span-12 lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 grid grid-cols-12  py-6 md:grid-flow-row row-span-2">
    <div class="col-span-6  lg:col-span-6 md:col-span-12 xl:col-span-6 2xl:col-span-6 grid grid-cols-3  px-2 ">
      <div class="col-span-1 pl-16">
        <figure class="image is-128x128 ">
          <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
        </figure>
      </div>
      <div class="col-span-3 -mt-16">
        <article class="media">

          <div class="media-content">
            <div class="content">
              <p class="text-white text-xl pl-16">
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
    <div class="col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-6  md:col-span-8 md:col-start-3 rounded-3xl">
      <img class="rounded-3xl" src="{{ asset('img/QUIENES SOMOS_/plaza.jpg') }}" alt="">
    </div>



  </div>





</div>