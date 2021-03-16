<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

  <div class="container">

    {{-- ロゴ --}}
    <a class="navbar-brand" href="{{ route('home') }}">PhotoBon_92</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    {{-- ナビバー --}}
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="{{ route('getList') }}">画像一覧</a>
        <a class="nav-item nav-link active" href="{{ route('getList_92') }}">画像一覧（編集）</a>
        <a class="nav-item nav-link" href="{{ route('getForm_92') }}">画像アップロード</a>
      </div>
    </div>

  </div>
  

</nav>