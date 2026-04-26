<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class HomePageSetting extends Model
{
    protected $fillable = [
        'site_name',
        'site_tagline',
        'meta_title',
        'meta_description',
        'theme_colors',
        'nav_links',
        'nav_cta_label',
        'nav_cta_href',
        'hero_badge',
        'hero_title',
        'hero_description',
        'hero_primary_cta_label',
        'hero_primary_cta_href',
        'hero_secondary_cta_label',
        'hero_secondary_cta_href',
        'hero_notes',
        'hero_panel_label',
        'hero_panels',
        'hero_stats',
        'trust_items',
        'about_badge',
        'about_title',
        'about_description',
        'about_points',
        'services_badge',
        'services_title',
        'services_description',
        'services',
        'tvde_badge',
        'tvde_title',
        'tvde_description',
        'tvde_points',
        'tvde_metrics',
        'results_badge',
        'results_title',
        'results_description',
        'results',
        'process_badge',
        'process_title',
        'process_description',
        'process_steps',
        'testimonials_badge',
        'testimonials_title',
        'testimonials_description',
        'testimonials',
        'contact_badge',
        'contact_title',
        'contact_description',
        'contact_details',
        'contact_form_button_label',
        'contact_form_note',
        'contact_success_message',
        'footer_text',
        'footer_copyright',
    ];

    protected function casts(): array
    {
        return [
            'theme_colors' => 'array',
            'nav_links' => 'array',
            'hero_notes' => 'array',
            'hero_panels' => 'array',
            'hero_stats' => 'array',
            'trust_items' => 'array',
            'about_points' => 'array',
            'services' => 'array',
            'tvde_points' => 'array',
            'tvde_metrics' => 'array',
            'results' => 'array',
            'process_steps' => 'array',
            'testimonials' => 'array',
            'contact_details' => 'array',
        ];
    }

    public static function singleton(): self
    {
        return static::query()->firstOrCreate([], static::defaults());
    }

    public static function defaults(): array
    {
        return [
            'site_name' => 'Adelmo Top',
            'site_tagline' => 'Consultadoria prática e executiva',
            'meta_title' => 'Adelmo Top | Consultoria Executiva e Gestão TVDE',
            'meta_description' => 'Consultoria prática e executiva para estruturar operações, otimizar processos e aumentar a rentabilidade, com especialização em gestão de frotas TVDE.',
            'theme_colors' => [
                'bg' => '#f8fafc',
                'primary' => '#1e293b',
                'primary_deep' => '#0f172a',
                'graphite' => '#334155',
                'text' => '#0f172a',
                'text_soft' => '#475569',
                'accent' => '#16a34a',
                'accent_dark' => '#15803d',
            ],
            'nav_links' => [
                ['label' => 'Sobre', 'href' => '#sobre'],
                ['label' => 'Serviços', 'href' => '#servicos'],
                ['label' => 'TVDE', 'href' => '#tvde'],
                ['label' => 'Processo', 'href' => '#processo'],
                ['label' => 'Contactos', 'href' => '#contactos'],
            ],
            'nav_cta_label' => 'Agendar Reunião',
            'nav_cta_href' => '#contactos',
            'hero_badge' => 'Consultadoria prática e executiva',
            'hero_title' => 'Gestão e consultoria para negócios que precisam de resultados, não de teoria.',
            'hero_description' => 'Entramos, estruturamos e fazemos o negócio funcionar. Otimizamos processos, clarificamos controlo operacional e acompanhamos a execução com especialização forte em gestão de frotas TVDE.',
            'hero_primary_cta_label' => 'Agendar Reunião',
            'hero_primary_cta_href' => '#contactos',
            'hero_secondary_cta_label' => 'Falar com um Consultor',
            'hero_secondary_cta_href' => '#servicos',
            'hero_notes' => [
                ['icon' => 'plus', 'text' => 'Organização operacional com foco em rentabilidade'],
                ['icon' => 'check', 'text' => 'Especialistas em operações TVDE'],
            ],
            'hero_panel_label' => 'Operação com controlo',
            'hero_panels' => [
                [
                    'title' => 'Decisão baseada em números, processos e acompanhamento real.',
                    'description' => 'Do diagnóstico inicial à implementação, a intervenção é prática, mensurável e orientada à execução.',
                ],
                [
                    'title' => 'Porta de entrada transversal. Especialização clara.',
                    'description' => 'Consultoria operacional para várias empresas, com um posicionamento particularmente forte no universo TVDE.',
                ],
            ],
            'hero_stats' => [
                ['value' => '+200', 'label' => 'Viaturas acompanhadas'],
                ['value' => '+250', 'label' => 'Motoristas coordenados'],
                ['value' => '+18%', 'label' => 'Eficiência operacional'],
            ],
            'trust_items' => [
                ['title' => 'Controlo', 'description' => 'Leitura operacional clara para corrigir falhas rapidamente.'],
                ['title' => 'Execução', 'description' => 'Mais do que aconselhar, acompanhamos a implementação.'],
                ['title' => 'Rentabilidade', 'description' => 'Custos, operação e margem alinhados com objetivos reais.'],
                ['title' => 'Escala', 'description' => 'Estrutura preparada para crescer sem perder controlo.'],
            ],
            'about_badge' => 'Sobre a Adelmo Top',
            'about_title' => 'Experiência real na gestão de negócios, com foco na operação.',
            'about_description' => 'A Adelmo Top nasce da prática. Entramos no negócio, analisamos o que está a falhar, estruturamos o que falta e acompanhamos a implementação das soluções para que o resultado apareça na operação e não apenas no papel.',
            'about_points' => [
                ['icon' => 'plus', 'text' => 'Diagnóstico objetivo dos pontos críticos do negócio.'],
                ['icon' => 'check', 'text' => 'Organização de processos, controlo e responsabilidades.'],
                ['icon' => 'chart-bar', 'text' => 'Apoio à gestão com métricas, prioridade e cadência de execução.'],
                ['icon' => 'squares', 'text' => 'Intervenção pensada para criar base sólida e crescimento sustentável.'],
            ],
            'services_badge' => 'Serviços',
            'services_title' => 'Consultoria geral para empresas que precisam de estrutura, clareza e acompanhamento.',
            'services_description' => 'A consultoria é a porta de entrada. O trabalho centra-se em organizar a operação, melhorar o controlo e criar um modelo de gestão mais leve, previsível e rentável.',
            'services' => [
                ['icon' => 'chart-bar', 'title' => 'Consultoria estratégica', 'description' => 'Leitura global do negócio para alinhar objetivos, prioridades operacionais e decisões de gestão com impacto real.'],
                ['icon' => 'bars', 'title' => 'Organização de processos', 'description' => 'Definição de fluxos, rotinas, responsabilidades e mecanismos de controlo para reduzir ruído e aumentar consistência.'],
                ['icon' => 'arrow-shrink', 'title' => 'Redução de custos operacionais', 'description' => 'Identificação de desperdícios, revisão de estrutura e otimização de recursos para proteger margem sem comprometer o serviço.'],
                ['icon' => 'clipboard', 'title' => 'Implementação de sistemas de controlo', 'description' => 'Criação de mapas de gestão, leitura financeira e indicadores operacionais para acompanhar desempenho com regularidade.'],
                ['icon' => 'plus', 'title' => 'Apoio à gestão diária', 'description' => 'Acompanhamento próximo da operação para garantir ritmo de execução, resposta rápida e disciplina nos processos definidos.'],
                ['icon' => 'arrow-right', 'title' => 'Estruturação operacional', 'description' => 'Preparação do negócio para crescer com método, controlo interno e capacidade de decisão sustentada por dados.'],
            ],
            'tvde_badge' => 'Especialização TVDE',
            'tvde_title' => 'Gestão profissional de frotas TVDE com foco em rentabilidade, controlo e escala.',
            'tvde_description' => 'É aqui que a Adelmo Top se diferencia com maior força. A lógica de gestão TVDE exige disciplina operacional, leitura financeira diária e um modelo capaz de coordenar viaturas, motoristas e plataformas sem perder margem.',
            'tvde_points' => [
                ['icon' => 'user', 'text' => 'Gestão de motoristas com regras claras, acompanhamento e maior previsibilidade operacional.'],
                ['icon' => 'calendar', 'text' => 'Controlo de receitas e despesas por viatura, período e motorista.'],
                ['icon' => 'trending-up', 'text' => 'Otimização de operação em Uber e Bolt com base em performance e disponibilidade.'],
                ['icon' => 'chart-up', 'text' => 'Estruturação de crescimento da frota com visão de escala e controlo financeiro.'],
            ],
            'tvde_metrics' => [
                ['value' => '+200', 'description' => 'Viaturas com análise operacional e controlo de rentabilidade.'],
                ['value' => '+250', 'description' => 'Motoristas geridos com foco em consistência e desempenho.'],
                ['value' => '360°', 'description' => 'Visão completa sobre receitas, custos, escalas e eficiência.'],
                ['value' => 'Escala', 'description' => 'Modelo pensado para crescer sem perder disciplina operacional.'],
            ],
            'results_badge' => 'Resultados',
            'results_title' => 'Números que reforçam a diferença entre gestão reativa e operação estruturada.',
            'results_description' => 'Quando existe processo, leitura de dados e acompanhamento contínuo, a operação deixa de depender da improvisação e passa a trabalhar com previsibilidade.',
            'results' => [
                ['value' => '+200', 'title' => 'Viaturas geridas', 'description' => 'Operações acompanhadas com foco em rentabilidade por unidade e controlo diário.'],
                ['value' => '+250', 'title' => 'Motoristas coordenados', 'description' => 'Organização operacional suportada por regras, acompanhamento e métricas claras.'],
                ['value' => '+250 mil €', 'title' => 'Faturação analisada', 'description' => 'Leitura financeira orientada para reduzir falhas e proteger margem operacional.'],
                ['value' => '+18%', 'title' => 'Aumento de eficiência', 'description' => 'Impacto obtido através de melhor controlo, rotina e disciplina de gestão.'],
            ],
            'process_badge' => 'Como funciona',
            'process_title' => 'Um processo simples, rigoroso e orientado à execução.',
            'process_description' => 'Cada projeto segue uma sequência clara para garantir leitura objetiva do negócio, intervenção ajustada e acompanhamento consistente até os resultados se consolidarem.',
            'process_steps' => [
                ['icon' => 'search', 'title' => 'Diagnóstico do negócio', 'description' => 'Levantamento rápido do estado atual da operação, principais falhas, custos ocultos e prioridades de intervenção.'],
                ['icon' => 'bars', 'title' => 'Plano de ação', 'description' => 'Definição das decisões, rotinas, indicadores e prioridades com maior impacto na melhoria da operação.'],
                ['icon' => 'check', 'title' => 'Implementação', 'description' => 'Entrada na operação para ajustar processos, criar controlo e garantir que o plano passa do papel à prática.'],
                ['icon' => 'clock', 'title' => 'Acompanhamento contínuo', 'description' => 'Monitorização regular para corrigir desvios, consolidar processos e manter a operação em melhoria contínua.'],
            ],
            'testimonials_badge' => 'Credibilidade',
            'testimonials_title' => 'Confiança construída com clareza, proximidade e execução.',
            'testimonials_description' => 'Testemunhos de perfil realista para transmitir o tipo de relação e impacto esperado no terreno.',
            'testimonials' => [
                ['quote' => 'A operação passou a ter método. Em poucas semanas ficou claro onde estávamos a perder margem e o que precisava de ser corrigido primeiro.', 'name' => 'Rui Almeida', 'role' => 'Gestor operacional, pequena empresa de serviços', 'engagement' => 'Projeto de reorganização'],
                ['quote' => 'Na frota TVDE, o maior ganho foi o controlo. Hoje sabemos por viatura o que rende, o que falha e onde agir sem perder tempo.', 'name' => 'Mariana Lopes', 'role' => 'Responsável de frota TVDE', 'engagement' => 'Otimização operacional'],
                ['quote' => 'Não recebemos apenas recomendações. Houve acompanhamento real, decisões práticas e uma estrutura de gestão muito mais sólida.', 'name' => 'Daniel Martins', 'role' => 'Administrador, negócio em crescimento', 'engagement' => 'Apoio à gestão'],
            ],
            'contact_badge' => 'Contactos',
            'contact_title' => 'Vamos perceber onde está o bloqueio e o que precisa de ser estruturado.',
            'contact_description' => 'Se procura uma consultoria próxima da operação, orientada para ação e com capacidade para organizar o negócio de forma concreta, este é o ponto de partida.',
            'contact_details' => [
                ['icon' => 'mail', 'title' => 'Email', 'value' => 'geral@adelmotop.pt'],
                ['icon' => 'phone', 'title' => 'Telefone', 'value' => '+351 910 000 000'],
                ['icon' => 'map-pin', 'title' => 'Atuação', 'value' => 'Portugal, com acompanhamento operacional e reuniões por marcação.'],
            ],
            'contact_form_button_label' => 'Falar com um Consultor',
            'contact_form_note' => 'Responderemos com brevidade após a análise inicial do pedido.',
            'contact_success_message' => 'Mensagem enviada com sucesso. Entraremos em contacto em breve.',
            'footer_text' => 'Consultadoria prática e executiva. Entramos, estruturamos e fazemos o negócio funcionar.',
            'footer_copyright' => '© 2026 Adelmo Top. Todos os direitos reservados.',
        ];
    }

    public function mergedContent(): array
    {
        return array_replace_recursive(
            static::defaults(),
            Arr::only($this->toArray(), array_keys(static::defaults())),
        );
    }

    public static function iconOptions(): array
    {
        return [
            'arrow-right' => 'Seta direita',
            'arrow-shrink' => 'Custos / redução',
            'bars' => 'Linhas / processos',
            'calendar' => 'Calendário',
            'chart-bar' => 'Gráfico barras',
            'chart-up' => 'Gráfico subida',
            'check' => 'Check',
            'clock' => 'Relógio',
            'clipboard' => 'Clipboard',
            'mail' => 'Email',
            'map-pin' => 'Localização',
            'phone' => 'Telefone',
            'plus' => 'Mais',
            'search' => 'Pesquisa',
            'squares' => 'Quadrados',
            'trending-up' => 'Tendência',
            'user' => 'Utilizador',
        ];
    }
}
