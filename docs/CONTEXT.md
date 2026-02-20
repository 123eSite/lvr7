# Neooh - Documentação do Projeto Front-end

> **Última atualização:** Início - 18/02/2026
> **Status:** Em desenvolvimento

---

## Visão Geral

Site institucional da **LVR7**.

---

## Estrutura de Arquivos

```
html/
├── css/
│   └── style.css              # CSS principal customizado
├── js/
│   └── script.js              # JavaScript principal (app object)
├── img/                       # Imagens do projeto (.webp, .svg, .jpg, .png)
├── vendor/                    # Bibliotecas de terceiros
│   ├── bootstrap/             # Bootstrap 5
│   ├── swiper/                # Swiper.js (carrosséis)
│   ├── jquery/                # jQuery
│   ├── counter/               # CountUp.js
│   ├── fancybox/              # Lightbox para imagens
│   └── icons/                 # Ícones customizados
└── *.html                     # Páginas HTML
```

---

## Stack Tecnológica

| Tecnologia | Versão | Uso |
|------------|--------|-----|
| Bootstrap | 5.x | Grid system, componentes base |
| Swiper.js | Bundle | Carrosséis e sliders |
| CountUp.js | - | Animação de números |
| jQuery | Min | Manipulação DOM (legado) |
| Font Awesome | Kit | Ícones |
| Google Fonts | Montserrat | Fonte principal |

---

## Variáveis CSS

```css
:root {

}
```

---

## Padrões de Nomenclatura

### Classes CSS

| Tipo | Padrão | Exemplos |
|------|--------|----------|
| Seções | kebab-case descritivo | `banner-top`, `text-image`, `donate-types` |
| Modificadores | classe direta | `.yellow`, `.blue`, `.bg-gray` |
| Utilitárias | prefixo descritivo | `.padding-tb`, `.img-radius`, `.img-radius-12` |
| Bootstrap | classes nativas | `.container`, `.row`, `.col-lg-*` |

### Estrutura HTML

- Indentação: **4 espaços**
- Atributos: aspas duplas
- Imagens: sempre com `alt=""`
- Classes: ordem - componente, modificador, utilitária, bootstrap

---

## Estrutura Base HTML

```html
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LVR7</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header fixo (clonado via JS) -->
    <header class="fix">
        <div class="container">
            <nav class="navbar navbar-expand-lg"></nav>
        </div>
    </header>

    <!-- Wrapper do conteúdo -->
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Header principal -->
            <header>
                <div class="container">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo + Menu + Botão DOE AGORA -->
                    </nav>
                </div>
            </header>

            <main>
                <!-- Seções de conteúdo -->
            </main>

            <footer>
                <!-- Grid 8 colunas com menus -->
                <!-- Bottom com logo + info + certificações -->
                <!-- Copy com logo Midiaria -->
            </footer>

        </div>
    </div>

    <!-- Scripts (ordem importante) -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="vendor/icons/icons.css">
    <script src="https://kit.fontawesome.com/fa64eccb28.js" crossorigin="anonymous"></script>
    <script src="vendor/bootstrap/js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css" />
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/counter/index.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
```

---

## Componentes Reutilizáveis


### 1. Swiper (Configuração via data-attributes)

```html
<div class="swiper"
     data-loop="true"
     data-centeredSlides="false"
     data-pagination="true"
     data-navigation="false"
     data-autoplay="true"
     data-autoplay-delay="3000"
     data-desktop="3"
     data-tablet="2"
     data-mobile="1"
     data-space="40"
     data-speedy="1000">
    <div class="swiper-wrapper">
        <div class="swiper-slide">...</div>
    </div>
    <div class="swiper-pagination"></div>
</div>
```

| Atributo | Tipo | Padrão | Descrição |
|----------|------|--------|-----------|
| data-loop | boolean | false | Loop infinito |
| data-centeredSlides | boolean | false | Slide centralizado |
| data-pagination | boolean | false | Mostrar paginação |
| data-navigation | boolean | false | Mostrar setas |
| data-autoplay | boolean | false | Autoplay |
| data-autoplay-delay | number | 3000 | Delay em ms |
| data-desktop | number/auto | 1 | Slides visíveis desktop |
| data-tablet | number/auto | 1 | Slides visíveis tablet |
| data-mobile | number/auto | 1 | Slides visíveis mobile |
| data-space | number | 0 | Espaço entre slides |
| data-speedy | number | 1000 | Velocidade transição |

---

## Classes Utilitárias

| Classe | CSS |
|--------|-----|
| `.padding-tb` |  |

---

## Status das Páginas

| Arquivo | Status | Observações |
|---------|--------|-------------|
| `index.html` | 🔄 Em progresso | Home: Hero, Soluções, Cases (tabs Retail/Corporativo) |

---

## JavaScript (script.js)

O arquivo usa um objeto `app` com métodos:

```javascript
var app = {
    init: () => {}           // Inicialização no DOMContentLoaded
}
app.init()
```

---

## Breakpoints Responsivos

```css
@media (min-width: 1400px) { /* XL+ */ }
@media (max-width: 1399px) { /* < XL */ }
@media (min-width: 1200px) and (max-width: 1399px) { /* LG-XL */ }
@media (max-width: 991px) { /* < LG - Tablet */ }
@media (max-width: 767px) { /* < MD - Mobile */ }
@media (max-width: 350px) { /* Muito pequeno */ }
```

**Organização do CSS:** Todos os estilos responsivos (`@media`) devem ficar concentrados **ao final do arquivo** `html/css/style.css`, na seção marcada como `/* ========== Responsivo ========== */`. Não espalhar blocos `@media` no meio das seções; manter o restante do CSS em ordem lógica (por seção/componente) e o responsivo agrupado no fim.

---

## Tarefas Pendentes


---

## Notas para Desenvolvimento

1. **Imagens:** Preferir formato `.webp` para fotos, `.svg` para ícones/logos
2. **Botões:** Usar classe `.button`, variante `.button.blue` para fundo azul
3. **Espaçamento:** Usar `.padding-tb` entre seções
4. **Títulos:** Sempre usar `.subtitle` + `.title` em sequência. Para títulos padrões (H2), usar a classe `.title` que consome as variáveis do root.
5. **Grid:** Usar Bootstrap `.row` + `.col-lg-*` para layouts
6. **Swiper:** Configurar via data-attributes, não editar script.js
7. **CSS Aninhado:** Sempre aninhar estilos dentro da seção pai para evitar conflitos (ex: `header .menu` em vez de `.menu`). Nomes de classes genéricos soltos são proibidos, **EXCETO** para componentes globais como `.button`.
8. **Textos em container:** Manter textos dentro de `.container` para alinhamento central consistente
9. **Inline Styles:** Evitar estilos inline no HTML. Usar CSS sempre.
10. **CSS responsivo:** Manter todos os `@media` ao final de `style.css`, na seção `/* ========== Responsivo ========== */`.

---

*Documento gerado para auxiliar no desenvolvimento contínuo do projeto.*