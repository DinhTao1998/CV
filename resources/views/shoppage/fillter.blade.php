<div class="col-lg-3 col-xs-4 order-1 mb-5 mb-md-0" style="padding-top: 80px; background: white">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Vị Trí</h3>
              <form class="form">
                <div class="inputGroup">
                  <input id="option1" name="option1" type="checkbox"/>
                  <label style="font-weight: 100" for="option1">TP.Hồ Chí Minh</label>
                </div>

                <div class="inputGroup">
                  <input id="option2" name="option2" type="checkbox"/>
                  <label for="option2" style="font-weight: 100">Hà Nội</label>
                </div>
                {{-- <div class="inputGroup">
                  <input id="option3" name="option3" type="checkbox"/>
                  <label for="option3" style="font-weight: 100">Khác</label>
                </div> --}}
              </form>
            </div>

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <div>
                <h3 class="mb-3 h6 text-uppercase text-black d-block gpa">GPA > <span id="gpa"></span></h3>
                {{-- <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" /> --}}
                <input type="range" min="0" max="10" id="value-gpa" value="5" speed="0.1" class="range blue" style="width: 80%" />
              </div>

              {{-- <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                <label for="s_sm" class="d-flex">
                  <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
                </label>
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
                </a>
              </div> --}}

            </div>
          </div>