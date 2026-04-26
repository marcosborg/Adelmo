<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page['meta_title'] }}</title>
    <meta name="description" content="{{ $page['meta_description'] }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/site/css/style.css') }}">
    <style>
        :root {
            --bg: {{ $page['theme_colors']['bg'] ?? '#f8fafc' }};
            --text: {{ $page['theme_colors']['text'] ?? '#0f172a' }};
            --text-soft: {{ $page['theme_colors']['text_soft'] ?? '#475569' }};
            --heading: {{ $page['theme_colors']['text'] ?? '#0f172a' }};
            --primary: {{ $page['theme_colors']['primary'] ?? '#1e293b' }};
            --primary-deep: {{ $page['theme_colors']['primary_deep'] ?? '#0f172a' }};
            --graphite: {{ $page['theme_colors']['graphite'] ?? '#334155' }};
            --accent: {{ $page['theme_colors']['accent'] ?? '#16a34a' }};
            --accent-dark: {{ $page['theme_colors']['accent_dark'] ?? '#15803d' }};
        }
    </style>
</head>
<body>
    <header class="site-header" id="topo">
        <div class="container nav">
            <a class="brand" href="#topo" aria-label="{{ $page['site_name'] }}">
                <span class="brand-mark" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <path d="M5 18.5 11.2 5.5h1.6L19 18.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.6 13.2h8.8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </span>
                <span>{{ $page['site_name'] }}</span>
            </a>
            <nav class="nav-links" aria-label="Navegação principal">
                @foreach ($page['nav_links'] as $link)
                    <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                @endforeach
                <a href="{{ route('filament.admin.auth.login') }}" aria-label="Login" title="Login">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <rect x="5" y="11" width="14" height="10" rx="2" stroke="currentColor" stroke-width="2"/>
                        <path d="M8 11V8a4 4 0 1 1 8 0v3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </a>
            </nav>
            <a class="nav-cta button button-primary" href="{{ $page['nav_cta_href'] }}">{{ $page['nav_cta_label'] }}</a>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-copy reveal">
                    <span class="eyebrow">{{ $page['hero_badge'] }}</span>
                    <h1>{{ $page['hero_title'] }}</h1>
                    <p class="lead">{{ $page['hero_description'] }}</p>
                    <div class="hero-actions">
                        <a class="button button-primary" href="{{ $page['hero_primary_cta_href'] }}">{{ $page['hero_primary_cta_label'] }}</a>
                        <a class="button button-secondary" href="{{ $page['hero_secondary_cta_href'] }}">{{ $page['hero_secondary_cta_label'] }}</a>
                    </div>
                    <div class="hero-meta">
                        @foreach ($page['hero_notes'] as $note)
                            <span class="hero-note">
                                <x-site-icon :name="$note['icon']" class="hero-inline-icon"/>
                                {{ $note['text'] }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <aside class="hero-panel reveal" aria-label="Resumo de valor">
                    <div class="panel-grid">
                        <span class="panel-label">{{ $page['hero_panel_label'] }}</span>
                        @foreach ($page['hero_panels'] as $panel)
                            <div class="panel-card">
                                <strong>{{ $panel['title'] }}</strong>
                                <span>{{ $panel['description'] }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="panel-stats">
                        @foreach ($page['hero_stats'] as $stat)
                            <div class="panel-stat">
                                <strong>{{ $stat['value'] }}</strong>
                                <span>{{ $stat['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </aside>
            </div>

            <div class="container trust-strip reveal">
                @foreach ($page['trust_items'] as $item)
                    <div class="trust-item">
                        <strong>{{ $item['title'] }}</strong>
                        <p>{{ $item['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="section" id="sobre">
            <div class="container split-grid">
                <div class="section-header reveal">
                    <span class="eyebrow">{{ $page['about_badge'] }}</span>
                    <h2>{{ $page['about_title'] }}</h2>
                    <p class="lead">{{ $page['about_description'] }}</p>
                </div>
                <div class="about-panel info-card reveal">
                    <div class="about-list">
                        @foreach ($page['about_points'] as $point)
                            <div>
                                <x-site-icon :name="$point['icon']"/>
                                {{ $point['text'] }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="servicos">
            <div class="container">
                <div class="section-header reveal">
                    <span class="eyebrow">{{ $page['services_badge'] }}</span>
                    <h2>{{ $page['services_title'] }}</h2>
                    <p class="lead">{{ $page['services_description'] }}</p>
                </div>

                <div class="services-grid">
                    @foreach ($page['services'] as $service)
                        <article class="service-card reveal">
                            <div class="service-icon" aria-hidden="true">
                                <x-site-icon :name="$service['icon']" width="26" height="26"/>
                            </div>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section" id="tvde">
            <div class="container">
                <div class="tvde-shell reveal">
                    <div class="tvde-grid">
                        <div class="tvde-copy">
                            <span class="eyebrow">{{ $page['tvde_badge'] }}</span>
                            <h2>{{ $page['tvde_title'] }}</h2>
                            <p>{{ $page['tvde_description'] }}</p>
                            <div class="tvde-list">
                                @foreach ($page['tvde_points'] as $point)
                                    <div>
                                        <x-site-icon :name="$point['icon']"/>
                                        {{ $point['text'] }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tvde-metrics">
                            @foreach ($page['tvde_metrics'] as $metric)
                                <div class="metric-tile">
                                    <strong>{{ $metric['value'] }}</strong>
                                    <p>{{ $metric['description'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="resultados">
            <div class="container">
                <div class="section-header reveal">
                    <span class="eyebrow">{{ $page['results_badge'] }}</span>
                    <h2>{{ $page['results_title'] }}</h2>
                    <p class="lead">{{ $page['results_description'] }}</p>
                </div>
                <div class="results-grid">
                    @foreach ($page['results'] as $result)
                        <article class="result-card reveal">
                            <strong>{{ $result['value'] }}</strong>
                            <h3>{{ $result['title'] }}</h3>
                            <p>{{ $result['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section" id="processo">
            <div class="container">
                <div class="section-header reveal">
                    <span class="eyebrow">{{ $page['process_badge'] }}</span>
                    <h2>{{ $page['process_title'] }}</h2>
                    <p class="lead">{{ $page['process_description'] }}</p>
                </div>
                <div class="process-grid">
                    @foreach ($page['process_steps'] as $step)
                        <article class="process-card reveal" data-step="{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}">
                            <div class="process-badge" aria-hidden="true">
                                <x-site-icon :name="$step['icon']" width="24" height="24"/>
                            </div>
                            <h3>{{ $step['title'] }}</h3>
                            <p>{{ $step['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section" id="testemunhos">
            <div class="container">
                <div class="section-header reveal">
                    <span class="eyebrow">{{ $page['testimonials_badge'] }}</span>
                    <h2>{{ $page['testimonials_title'] }}</h2>
                    <p class="lead">{{ $page['testimonials_description'] }}</p>
                </div>
                <div class="testimonials-grid">
                    @foreach ($page['testimonials'] as $testimonial)
                        <article class="testimonial reveal">
                            <p>“{{ $testimonial['quote'] }}”</p>
                            <footer>
                                <div>
                                    <strong>{{ $testimonial['name'] }}</strong>
                                    <span>{{ $testimonial['role'] }}</span>
                                </div>
                                <span>{{ $testimonial['engagement'] }}</span>
                            </footer>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section" id="contactos">
            <div class="container contact-grid">
                <div class="contact-card reveal">
                    <span class="eyebrow">{{ $page['contact_badge'] }}</span>
                    <h2>{{ $page['contact_title'] }}</h2>
                    <p>{{ $page['contact_description'] }}</p>
                    <div class="contact-details">
                        @foreach ($page['contact_details'] as $detail)
                            <div class="contact-detail">
                                <x-site-icon :name="$detail['icon']"/>
                                <div>
                                    <strong>{{ $detail['title'] }}</strong>
                                    <p>{{ $detail['value'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="contact-card reveal">
                    @if (session('contact_success'))
                        <div class="flash-message flash-success">{{ session('contact_success') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="flash-message flash-error">
                            <strong>Existem campos por corrigir.</strong>
                            <p>Verifique os dados introduzidos e volte a enviar.</p>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact-submissions.store') }}">
                        @csrf
                        <div class="field-grid">
                            <label>
                                Nome
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="O seu nome">
                            </label>
                            <label>
                                Empresa
                                <input type="text" name="company" value="{{ old('company') }}" placeholder="Nome da empresa">
                            </label>
                        </div>
                        <div class="field-grid">
                            <label>
                                Email
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="nome@empresa.pt">
                            </label>
                            <label>
                                Telefone
                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+351">
                            </label>
                        </div>
                        <label>
                            Mensagem
                            <textarea name="message" placeholder="Descreva brevemente o desafio do negócio, a operação atual e o apoio que procura.">{{ old('message') }}</textarea>
                        </label>
                        <button class="button button-primary" type="submit">{{ $page['contact_form_button_label'] }}</button>
                        <p class="form-note">{{ $page['contact_form_note'] }}</p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-bar">
            <div>
                <strong>{{ $page['site_name'] }}</strong>
                <p>{{ $page['footer_text'] }}</p>
            </div>
            <p>{{ $page['footer_copyright'] }}</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/site/js/main.js') }}"></script>
</body>
</html>
