<div class="hero hero-homepage container flex-col-c flex-c-c mt-5 pt-5">
  {{-- <img class="img-fluid pb-3 mb-md-0 hero-img" src="@asset('images/hero.png')" alt=""> --}}
  <div class="text-c-sm">
    <h6 class="uppercase mute text-spaced pt-5"><span class="text-success">Bonsai</span></h6>
    <h1 class="hero-header">Learn to Create Your Own <span class="text-success">Bonsai</span></h1>
    <p class="lead mute">Create this <span class="text-muted">exact website</span> <code class="badge badge-light" style="font-size: 24px;" data-toggle="tooltip" data-placement="bottom" title="1 - ./development.sh
      2 - ./staging.sh
      3 - ./production.sh
      4 - ./bonsai.sh" style="white-space: pre-line;">with 4 commands</code></p>
  </div>

  {{-- Video Play Button --}}
  <a href="#"  data-toggle="modal" data-target="#previewModal">
    <h1 style="font-size: 4.5rem;">
      <button class="btn btn-sm btn-round text-muted" type="button" name="button">
        <i class="fas fa-play mr-2"></i>
        Quick Intro
      </button>
    </h1>
  </a>
  {{-- /Video Play Button --}}

  {{-- @include('partials.funding') --}}

  @include('partials.stack')
</div>
