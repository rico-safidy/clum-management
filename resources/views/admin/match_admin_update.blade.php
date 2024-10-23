@extends('admin.layouts.master')

@section('title')
    Mise à jour du Match
@endsection

@section('content')
    <main class="team-add">
        <h2 class="subtitle-primary team-add-subtitle">Mettre à jour un match</h2>
        <form action="{{ Route('update_match', $match->id) }}" class="form team-add-form" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="team-add-content">
                <h3 class="subtitle-primary team-add-main-content-title">Information du match</h3>
                @if ($errors)
                    @foreach ($errors->all() as $error)
                        <p style="color: #df3838">{{ $error }}</p>
                    @endforeach
                @endif
                <h4 class="subtitle-primary">Nom des equipes</h4>
                <div class="form-content-container">
                    <div class="form-content">
                        <span class="checkout-main-form-icon">
                            <i class="fi fi-rr-users-alt"></i>
                        </span>
                        <input type="text" name="u-home-team" value="{{ $match->home_team }}" id="" class="form-input"
                            placeholder="Equipe a domicile">
                    </div>
                    vs
                    <div class="form-content">
                        <span class="checkout-main-form-icon">
                            <i class="fi fi-rr-users-medical"></i>
                        </span>
                        <input type="text" name="u-visitor-team" value="{{ $match->visitor_team }}" id="" class="form-input"
                            placeholder="Equipe visiteur">
                    </div>
                </div>
                <div class="form-content">
                    <span class="checkout-main-form-icon">
                        <i class="fi fi-rr-football"></i>
                    </span>
                    <input type="text" name="u-type" value="{{ $match->match_type }}" id="" class="form-input" placeholder="Type du match">
                </div>
                <h4 class="subtitle-primary">Date et lieu</h4>
                <div class="form-content">
                    <span class="checkout-main-form-icon">
                        <i class="fi fi-rr-marker"></i>
                    </span>
                    <input type="text" name="u-location" value="{{ $match->match_location }}" id="" class="form-input" placeholder="Lieu du match">
                </div>
                <div class="form-content-container">
                    <div class="form-content">
                        <span class="checkout-main-form-icon">
                            <i class="fi fi-rr-calendar-day"></i>
                        </span>
                        <input type="date" name="u-date" value="{{ $match->match_date }}" id="" class="form-input" placeholder="Type du match">
                    </div>
                    <div class="form-content">
                        <span class="checkout-main-form-icon">
                            <i class="fi fi-rr-clock"></i>
                        </span>
                        <input type="text" name="u-hour" value="{{ $match->match_hour }}" id="" class="form-input" placeholder="Heure du match">
                    </div>
                </div>
                <div class="form-content">
                    <span class="checkout-main-form-icon">
                        <i class="fi fi-rr-quote-right"></i>
                    </span>
                    <textarea name="u-desc" id="" rows="4" class="form-input" placeholder="Description du match">{{ $match->match_description }}</textarea>
                </div>
                <button type="submit" class="btn team-add-form-btn">
                    Mettre à jour
                    <i class="fi fi-rr-pen-fancy"></i>
                </button>
            </div>
        </form>
    </main>
@endsection