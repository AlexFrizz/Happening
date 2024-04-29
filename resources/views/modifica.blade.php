<section id="create" class="section-padding">
    <div class="row row-preview">
      <div class="panel-container1">
        <div class="panel1 glass">
          <div class="row row-create">
            <div class="col col-form">
              <div class="row row-title">
                <div class="create-title">
                  <h3 class="d-flex justify-content-center title-section">Let's <span> create </span> an happening</h3>
                  <p class="create-description d-flex justify-content-center">just enter some information</p>
                </div>
              </div>
              <form method="POST" action="{{ route('events.update', $evento->id) }}" enctype="multipart/form-data" id="update-event-form">
    @csrf
    @method('PUT') <!-- Assicurati di utilizzare il metodo PUT per l'aggiornamento -->
    
    <div class="row row-form1">
        <div class="col-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control glass form-control-lg live-preview-input" id="input-title" placeholder="What's the title?" name="title" value="{{ $evento->title }}">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="formFileLg" class="form-label">Image</label>
                <input class="form-control glass form-control-lg img-form" id="imageName" type="file" name="image" placeholder="Nothing selected">
                <input type="hidden" name="image_name" id="imageName">
                <input type="hidden" name="image" id="image-path">
            </div>
        </div>
    </div>

    <div class="row row-form2">
        <div class="col">
            <div class="mb-3">
                <label for="htmlInput" class="form-label">Description</label>
                <textarea name="description" class="form-control glass form-control-lg" id="input-description" rows="3" placeholder="Tell us something about...">{{ $evento->description }}</textarea>
            </div>
        </div>
    </div>

    <div class="row row-form3">
        <div class="col-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">City</label>
                <input type="text" class="form-control glass form-control-lg" id="input-city" placeholder="In which city?" name="city" value="{{ $evento->city }}">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" class="form-control glass form-control-lg" id="input-address" placeholder="To which address?" name="address" value="{{ $evento->address }}">
            </div>
        </div>
    </div>

    <div class="row row-form4">
        <div class="col-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Location</label>
                <input type="text" class="form-control glass form-control-lg" id="input-location" placeholder="At which location?" name="location" value="{{ $evento->location }}">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                <input type="date" class="form-control glass form-control-lg" id="input-date" placeholder="On which date?" name="date" value="{{ $evento->date }}">
            </div>
        </div>
    </div>

    <div class="row row-button">
        <div class="btn-container d-flex justify-content-center">
            <input class="btn-search" type="submit" value="Update">
        </div>
    </div>
</form>

            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="panel-container2">
          <div class="panel2 glass-preview">

            <div class="row row-preview">
              <div class="preview-title">
                <h3 class="d-flex justify-content-center title-section">Preview</h3>
              </div>
            </div>

            <div class="col-card d-flex justify-content-center align-items-center">
              <div class="card-preview glass" id="event-preview">
              </div>
              </div>
              <div class="card-footer-preview glass">
                <div class="btn-container">
                  <div class="row row-icon fixed-bottom">
                    <div class="card-btn d-flex justify-content-between ">
                      <a href="#" class="icon-join card-icon ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM17.7929 19.9142L21.3284 16.3787L22.7426 17.7929L17.7929 22.7426L14.2574 19.2071L15.6716 17.7929L17.7929 19.9142Z" fill="rgba(224,251,252,1)"></path></svg>
                      </a>
                      <a href="#" class="icon-comment card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M5.76282 17H20V5H4V18.3851L5.76282 17ZM6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455Z" fill="rgba(224,251,252,1)"></path></svg>
                      </a>
                      <a href="#" class="icon-share card-icon me-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M13.1202 17.0228L8.92129 14.7324C8.19135 15.5125 7.15261 16 6 16C3.79086 16 2 14.2091 2 12C2 9.79086 3.79086 8 6 8C7.15255 8 8.19125 8.48746 8.92118 9.26746L13.1202 6.97713C13.0417 6.66441 13 6.33707 13 6C13 3.79086 14.7909 2 17 2C19.2091 2 21 3.79086 21 6C21 8.20914 19.2091 10 17 10C15.8474 10 14.8087 9.51251 14.0787 8.73246L9.87977 11.0228C9.9583 11.3355 10 11.6629 10 12C10 12.3371 9.95831 12.6644 9.87981 12.9771L14.0788 15.2675C14.8087 14.4875 15.8474 14 17 14C19.2091 14 21 15.7909 21 18C21 20.2091 19.2091 22 17 22C14.7909 22 13 20.2091 13 18C13 17.6629 13.0417 17.3355 13.1202 17.0228ZM6 14C7.10457 14 8 13.1046 8 12C8 10.8954 7.10457 10 6 10C4.89543 10 4 10.8954 4 12C4 13.1046 4.89543 14 6 14ZM17 8C18.1046 8 19 7.10457 19 6C19 4.89543 18.1046 4 17 4C15.8954 4 15 4.89543 15 6C15 7.10457 15.8954 8 17 8ZM17 20C18.1046 20 19 19.1046 19 18C19 16.8954 18.1046 16 17 16C15.8954 16 15 16.8954 15 18C15 19.1046 15.8954 20 17 20Z" fill="rgba(224,251,252,1)"></path></svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>