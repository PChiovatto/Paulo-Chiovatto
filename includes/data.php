<?php
/**
 * TV que Vende — todo o conteúdo editorial do site.
 *
 * Mexa aqui para trocar textos, módulos, perguntas do quiz e FAQ.
 * Nenhuma marcação HTML precisa ser tocada.
 */

// --- Números de mercado (barra de estatísticas) -------------------------
// Fonte: dados de mercado de CTV no Brasil citados na comunicação do curso.
$STATS = [
    ['value' => 64,   'suffix' => '%',  'prefix' => '',    'decimals' => 0,
     'label' => 'da população digital brasileira já consome CTV'],
    ['value' => 4,    'suffix' => 'h',  'prefix' => '',    'decimals' => 0,
     'label' => 'de consumo médio de CTV por dia no Brasil'],
    ['value' => 78,   'suffix' => '%',  'prefix' => '',    'decimals' => 0,
     'label' => 'dos usuários assistem acompanhados'],
    ['value' => 2950, 'suffix' => '',   'prefix' => 'R$ ', 'decimals' => 0,
     'label' => 'de renda per capita média nos lares com streaming pago'],
];

// --- Dores ---------------------------------------------------------------
$PAINS = [
    'Seu cliente pergunta sobre CTV e você abre três abas no Google disfarçado',
    'Você não sabe explicar a diferença entre FAST, AVOD e CTV programático',
    'Campanhas sem controle de frequência desperdiçando budget no mesmo domicílio',
    'Concorrentes fechando contratos de CTV enquanto você ainda vende mídia linear',
    'Relatório bonito, mas sem conectar CTV a resultado de negócio real do cliente',
    'Verba espalhada em cinco compras diferentes, sem visão consolidada de alcance',
];

// --- Os 3 pilares do método ---------------------------------------------
$PILLARS = [
    ['num' => '01', 'icon' => '🧭', 'title' => 'Estratégia',
     'text' => 'Antes de abrir a DSP: qual objetivo, qual audiência, qual papel a CTV cumpre no plano. É o que separa quem compra impressão de quem compra resultado.'],
    ['num' => '02', 'icon' => '📐', 'title' => 'Execução',
     'text' => 'Setup de campanha, negociação de deal, frequency cap no domicílio e criativo para tela grande. O passo a passo operacional que ninguém documenta.'],
    ['num' => '03', 'icon' => '📈', 'title' => 'Prova',
     'text' => 'Alcance incremental, DPVR, Brand Lift e a ponte entre CTV e venda. Como sair da reunião com o cliente convencido — e com o budget renovado.'],
];

// --- Para quem é ---------------------------------------------------------
$AUDIENCE = [
    ['icon' => '📊', 'title' => 'Profissionais de mídia',
     'text' => 'Que querem dominar CTV programático e entregar mais valor para clientes e agências.',
     'win'  => 'Sai operando campanha ponta a ponta'],
    ['icon' => '🏢', 'title' => 'Gestores de marketing',
     'text' => 'Que decidem verba e estratégia e precisam entender onde e como investir em CTV.',
     'win'  => 'Sai sabendo cobrar o plano certo'],
    ['icon' => '🚀', 'title' => 'Iniciantes em publicidade',
     'text' => 'Que querem entrar no mercado já dominando o canal que mais cresce no Brasil.',
     'win'  => 'Sai com repertório de especialista'],
    ['icon' => '🎯', 'title' => 'Agências e consultores',
     'text' => 'Que querem oferecer CTV Ads como serviço e cobrar mais por isso.',
     'win'  => 'Sai com proposta comercial pronta'],
];

// --- Currículo -----------------------------------------------------------
$MODULES = [
    [
        'title'    => 'Fundamentos de CTV no Brasil',
        'summary'  => 'Entenda o ecossistema: Smart TV, FAST, AVOD, HVOD, vMVPD e como cada um impacta sua estratégia.',
        'duration' => '48 min',
        'lessons'  => [
            'O que é CTV — e por que ela não é "TV na internet"',
            'O mapa do ecossistema: Smart TV, dongles, consoles e set-top boxes',
            'FAST, AVOD, SVOD, HVOD e vMVPD sem decoreba',
            'Quem são os players no Brasil e o que cada um realmente vende',
            'Como o inventário chega até você: publisher, SSP e DSP',
        ],
    ],
    [
        'title'    => 'Planejamento e audiência',
        'summary'  => 'Como segmentar por comportamento, intenção de compra e dados de viewership — além do demográfico básico.',
        'duration' => '52 min',
        'lessons'  => [
            'Do briefing ao plano: as 4 perguntas antes de abrir a DSP',
            'Segmentação além de idade e gênero: comportamento e intenção',
            'Dados de viewership: o que dá para usar e o que é só promessa',
            'Co-viewing: por que 1 impressão nunca é 1 pessoa',
            'Montando o plano de mídia: alcance, frequência e verba',
        ],
    ],
    [
        'title'    => 'Compra programática de CTV',
        'summary'  => 'IO vs. PG vs. PMP: quando usar cada um, como negociar deals e consolidar buying para controle de frequência.',
        'duration' => '1h 04',
        'lessons'  => [
            'IO, PG e PMP: o que muda no controle, no preço e no risco',
            'Como negociar um deal e o que exigir do publisher',
            'Configurando a campanha na DSP, passo a passo',
            'Consolidar buying: por que espalhar verba destrói sua frequência',
            'Fraude, MFA e brand safety em ambiente CTV',
            'Checklist de setup antes de subir a campanha',
        ],
    ],
    [
        'title'    => 'Frequency capping e otimização',
        'summary'  => 'Como evitar desperdício de budget, configurar fcaps em nível de domicílio e maximizar alcance incremental.',
        'duration' => '47 min',
        'lessons'  => [
            'Frequência no domicílio vs. frequência no device',
            'Como definir o fcap certo para cada objetivo de campanha',
            'Diagnóstico: lendo o relatório de distribuição de frequência',
            'Alcance incremental — provando que você entregou gente nova',
            'A rotina de otimização semanal que cabe na sua agenda',
        ],
    ],
    [
        'title'    => 'Criativo para tela grande',
        'summary'  => 'O que funciona em CTV: formato, duração, gancho nos primeiros 5 segundos, QR code e CTA.',
        'duration' => '44 min',
        'lessons'  => [
            'O que muda quando a tela tem 55 polegadas e duas pessoas na frente',
            'Os 5 primeiros segundos: o gancho que segura o espectador',
            'Especificações técnicas: formatos, duração, áudio e legenda',
            'QR code, CTA e a ponte da TV para o celular',
            'Adaptando criativo de OLV sem parecer adaptação',
        ],
    ],
    [
        'title'    => 'Mensuração e resultado',
        'summary'  => 'DPVR, alcance incremental, ROAS, Brand Lift e como conectar CTV a resultado real de negócio.',
        'duration' => '58 min',
        'lessons'  => [
            'As métricas que importam e as que só enfeitam relatório',
            'DPVR: o que é e como usar sem se enganar',
            'Brand Lift e estudos de marca aplicados a CTV',
            'Atribuição e o caminho CTV → site → venda',
            'Montando o relatório que o cliente entende de verdade',
            'Conectando CTV ao resultado de negócio do cliente',
        ],
    ],
    [
        'title'    => 'CTV + estratégia omnichannel',
        'summary'  => 'Como integrar CTV com mobile, display, OLV e linear TV para uma arquitetura de mídia completa.',
        'duration' => '51 min',
        'lessons'  => [
            'Onde a CTV entra na arquitetura de mídia',
            'CTV + mobile: retargeting e a jornada de segunda tela',
            'CTV vs. TV linear: convivência, não substituição',
            'Montando a proposta comercial de CTV para o cliente',
            'Case guiado: do briefing ao relatório final',
        ],
    ],
];

// --- Glossário interativo (cards que viram ao clicar) --------------------
$GLOSSARY = [
    ['term' => 'CTV',        'full' => 'Connected TV',
     'def'  => 'Qualquer TV conectada à internet que roda conteúdo em streaming — Smart TV, dongle, console ou set-top box.'],
    ['term' => 'FAST',       'full' => 'Free Ad-Supported TV',
     'def'  => 'Canais lineares gratuitos e sustentados por publicidade. Você "zapeia" como na TV aberta, mas dentro do streaming.'],
    ['term' => 'AVOD',       'full' => 'Advertising Video on Demand',
     'def'  => 'Catálogo sob demanda gratuito, monetizado por anúncio. O usuário escolhe o que assistir e paga com atenção.'],
    ['term' => 'SVOD',       'full' => 'Subscription VOD',
     'def'  => 'Streaming por assinatura. Historicamente sem anúncio — hoje quase todos abriram planos com publicidade.'],
    ['term' => 'HVOD',       'full' => 'Hybrid VOD',
     'def'  => 'Modelo híbrido: assinatura mais barata com carga de anúncio, ou assinatura cheia sem anúncio.'],
    ['term' => 'vMVPD',      'full' => 'Virtual Multichannel Video Programming Distributor',
     'def'  => 'O "pacote de TV por assinatura" entregue pela internet, com grade de canais ao vivo.'],
    ['term' => 'PMP',        'full' => 'Private Marketplace',
     'def'  => 'Leilão fechado por convite: inventário selecionado, preço negociado, sem garantia de volume.'],
    ['term' => 'PG',         'full' => 'Programmatic Guaranteed',
     'def'  => 'Volume e preço fixados em contrato, executados via DSP. Previsibilidade de IO com controle de programática.'],
    ['term' => 'IO',         'full' => 'Insertion Order',
     'def'  => 'A compra direta tradicional, no papel. Simples de fechar, difícil de consolidar frequência.'],
    ['term' => 'DPVR',       'full' => 'Digital Program Viewing Rate',
     'def'  => 'Taxa de visualização do conteúdo digital. Usada para dimensionar audiência real de um programa em streaming.'],
    ['term' => 'Fcap',       'full' => 'Frequency Cap',
     'def'  => 'O teto de vezes que a mesma pessoa (ou domicílio) pode ver seu anúncio. Sem ele, o budget queima repetindo.'],
    ['term' => 'Co-viewing', 'full' => 'Visualização acompanhada',
     'def'  => 'Mais de uma pessoa assistindo à mesma tela. Uma impressão pode valer duas pessoas alcançadas.'],
];

// --- Quiz de diagnóstico -------------------------------------------------
// Cada resposta vale de 0 a 2 pontos. Máximo: 8.
$QUIZ = [
    [
        'q' => 'Você já comprou mídia em CTV?',
        'a' => [
            ['t' => 'Nunca comprei',                       'p' => 0],
            ['t' => 'Algumas vezes, com apoio de alguém',   'p' => 1],
            ['t' => 'É rotina no meu trabalho',             'p' => 2],
        ],
    ],
    [
        'q' => 'Consegue explicar a diferença entre FAST, AVOD e vMVPD numa reunião?',
        'a' => [
            ['t' => 'Sinceramente, não',                    'p' => 0],
            ['t' => 'Mais ou menos, me embolo em algum',     'p' => 1],
            ['t' => 'Tranquilamente, com exemplos',         'p' => 2],
        ],
    ],
    [
        'q' => 'Como você controla frequência hoje?',
        'a' => [
            ['t' => 'Não controlo',                          'p' => 0],
            ['t' => 'Controlo por device, em cada compra',    'p' => 1],
            ['t' => 'No domicílio, com buying consolidado',   'p' => 2],
        ],
    ],
    [
        'q' => 'Consegue provar alcance incremental para o cliente?',
        'a' => [
            ['t' => 'Não sei nem por onde começar',          'p' => 0],
            ['t' => 'Mostro alcance, mas não o incremental', 'p' => 1],
            ['t' => 'Sim, com dado e metodologia',           'p' => 2],
        ],
    ],
];

$QUIZ_RESULTS = [
    ['max' => 2, 'level' => 'Explorador', 'icon' => '🌱',
     'text' => 'Você está no começo — e isso é uma vantagem: vai aprender do jeito certo, sem vício de processo. O curso começa exatamente no seu ponto, no Módulo 1, e te leva até montar uma campanha sozinho.',
     'focus' => 'Comece pelos Módulos 1 a 3'],
    ['max' => 5, 'level' => 'Operador', 'icon' => '⚙️',
     'text' => 'Você já opera, mas provavelmente perde budget em frequência e trava na hora de provar resultado. É exatamente o buraco que os Módulos 4 e 6 fecham — e onde está o maior ganho imediato para você.',
     'focus' => 'Seu maior salto está nos Módulos 4 e 6'],
    ['max' => 8, 'level' => 'Especialista', 'icon' => '🏆',
     'text' => 'Você domina o operacional. O que separa você do próximo nível é estratégia omnichannel e a conversa comercial: transformar competência técnica em proposta que o cliente aprova e renova.',
     'focus' => 'Vá direto aos Módulos 6 e 7'],
];

// --- Comparativo de canais ----------------------------------------------
$COMPARISON = [
    'columns' => ['CTV Ads', 'TV Linear', 'Display / OLV'],
    'rows' => [
        ['label' => 'Segmentação de audiência',      'v' => ['full', 'none', 'full']],
        ['label' => 'Mensuração por impressão',      'v' => ['full', 'none', 'full']],
        ['label' => 'Controle de frequência',        'v' => ['full', 'partial', 'partial']],
        ['label' => 'Atenção da audiência',          'v' => ['full', 'full', 'none']],
        ['label' => 'Tela grande, som alto',         'v' => ['full', 'full', 'none']],
        ['label' => 'Impacto de co-viewing',         'v' => ['full', 'full', 'none']],
        ['label' => 'Anúncio não pulável',           'v' => ['full', 'full', 'none']],
        ['label' => 'Entrada com verba menor',       'v' => ['full', 'none', 'full']],
        ['label' => 'Otimização em tempo real',      'v' => ['full', 'none', 'full']],
    ],
];

// --- Formato -------------------------------------------------------------
$FORMAT = [
    ['icon' => '🎬', 'title' => 'Aulas gravadas',
     'text' => 'Acesso imediato a todo o conteúdo. Assista quando e onde quiser, no seu ritmo.'],
    ['icon' => '🎙️', 'title' => 'Encontros ao vivo',
     'text' => 'Sessões de perguntas, cases reais e feedback direto com o instrutor. Tudo fica gravado.'],
    ['icon' => '📁', 'title' => 'Materiais e templates',
     'text' => 'Planilhas, checklists e frameworks prontos para usar com clientes já na segunda-feira.'],
    ['icon' => '🏆', 'title' => 'Certificado',
     'text' => 'Certificado de conclusão para o seu portfólio e para o seu LinkedIn.'],
];

// --- Bônus ---------------------------------------------------------------
$BONUSES = [
    ['title' => 'Planilha de plano de mídia CTV',   'text' => 'Alcance, frequência e verba calculados automaticamente.'],
    ['title' => 'Checklist de setup de campanha',   'text' => 'Os 23 pontos para conferir antes de subir qualquer campanha.'],
    ['title' => 'Templates de proposta comercial',  'text' => 'A apresentação que transforma CTV em contrato assinado.'],
    ['title' => 'Glossário CTV em PDF',             'text' => 'Para nunca mais travar num termo no meio da reunião.'],
    ['title' => 'Comunidade privada de alunos',     'text' => 'Onde as dúvidas de campanha real são resolvidas.'],
    ['title' => 'Atualizações vitalícias',          'text' => 'O mercado muda, o conteúdo acompanha — sem custo extra.'],
];

// --- O que está incluso (caixa de preço) ---------------------------------
$PRICE_FEATURES = [
    'Acesso completo às aulas gravadas',
    'Encontros ao vivo com o instrutor',
    'Templates e materiais exclusivos',
    'Certificado de conclusão',
    'Atualizações do conteúdo incluídas',
    'Comunidade privada de alunos',
];

// --- FAQ ------------------------------------------------------------------
$FAQ = [
    ['q' => 'Preciso ter experiência prévia em mídia?',
     'a' => 'Não. O curso foi desenvolvido para funcionar tanto para iniciantes quanto para profissionais experientes que querem se especializar em CTV. Se você está começando, faça o diagnóstico gratuito aqui na página: ele indica por onde começar.'],
    ['q' => 'Por quanto tempo terei acesso ao conteúdo?',
     'a' => 'O acesso às aulas gravadas é por tempo indeterminado. Você também recebe as atualizações de conteúdo sem custo adicional — e CTV é um mercado que muda rápido, então isso vale bastante.'],
    ['q' => 'Como funcionam os encontros ao vivo?',
     'a' => 'Acontecem em datas programadas e ficam gravados para quem não puder assistir na hora. São sessões de perguntas, análise de cases e aplicação prática — você pode levar a sua campanha real para ser analisada.'],
    ['q' => 'O curso tem garantia?',
     'a' => 'Sim. Você tem 7 dias de garantia incondicional. Se não ficar satisfeito por qualquer motivo, devolvemos 100% do valor investido, sem perguntas e sem burocracia.'],
    ['q' => 'Posso parcelar?',
     'a' => 'Pode. O pagamento pode ser parcelado em até ' . PRICE_INSTALLMENTS . 'x de R$ ' . brl(PRICE_INSTALLMENT) . ' no cartão de crédito, ou à vista no PIX com ' . (int) (PIX_DISCOUNT * 100) . '% de desconto: R$ ' . brl(PRICE_PIX) . '.'],
    ['q' => 'Preciso já ter acesso a uma DSP para acompanhar?',
     'a' => 'Não é obrigatório. As aulas de execução mostram a tela e o raciocínio por trás de cada configuração, então você entende o que fazer mesmo antes de ter acesso à plataforma. Quando tiver, é só repetir o passo a passo.'],
    ['q' => 'O conteúdo serve para o mercado fora do Brasil?',
     'a' => 'A lógica de planejamento, compra, frequência e mensuração é a mesma em qualquer mercado. O que é específico do Brasil são os players, os preços e os dados de audiência — e é justamente isso que você não encontra em curso estrangeiro.'],
    ['q' => 'Recebo nota fiscal? Dá para a empresa pagar?',
     'a' => 'Sim, emitimos nota fiscal e o pagamento pode ser feito pela empresa. Se precisar de um documento de proposta para aprovação interna, é só pedir pelo e-mail de contato no rodapé.'],
];
