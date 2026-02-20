# Design System - LVR7

## 1. Cores
> [!NOTE]
> Preencher com os códigos Hexadecimais exatos. Baseado nas classes `.green`, `gray`.

| Nome | Hex | Variável CSS | Uso |
|------|-----|--------------|-----|
| Primary Green | #00340e | `--color-green` | Botões primários, destaques, Títulos |
| Gray Light | #f8f8f8 | `--color-gray-light` | Backgrounds de seções |
| Gray Dark | #dedede | `--color-gray-dark` | Textos secundários, rodapé |
| White | #FFFFFF | `--color-white` | Textos em fundos escuros, cards |
| Black | #000000 | `--color-black` | Textos principais |

## 2. Tipografia
**Fonte Principal:** Montserrat (Google Fonts)

| Estilo | Peso | Tamanho (Desktop) | Tamanho (Mobile) | Line Height | Variável |
|--------|------|-------------------|------------------|-------------|----------|
| H1 (Hero) | 700/Bold | 54px | 40px | 1.2 | `--font-h1` |
| H2 (Seções) | 600/SemiBold | 48px | 32px | 1.3 | `--font-h2` |
| H3 (Cards) | 600/SemiBold | 24px | 20px | 1.4 | `--font-h3` |
| Body Text | 400/Regular | 16px | 16px | 1.6 | `--font-body` |
| Button Text | 600/SemiBold | 16px | 14px | 1.0 | `--font-btn` |

## 3. Botões & Links
> [!IMPORTANT]
> Definir estados: Normal, Hover, Active, Disabled.

### Botão Primário (.button.green)
- **Background:** Primary Green
- **Text Color:** White
- **Border Radius:** 50px (Pill shape?) ou 8px?
- **Padding:** 12px 32px
- **Hover:** ?

### Botão Secundário / Outline
- **Border:** 2px solid Primary Green
- **Background:** Transparent
- **Text Color:** Primary Green

## 4. Ícones
- **Biblioteca:** Font Awesome 6 (Free)
- **Custom:** SVGs na pasta `assets/icons/`

## 5. Espaçamento & Grid
- **Grid System:** Bootstrap 5 (Container, Row, Col)
- **Container Max-width:** 1320px (XXL) ?
- **Gutter:** 24px (padrão BS5)

### Spacing Utility Classes
| Classe | Desktop | Mobile |
|--------|---------|--------|
| `.padding-tb` | 80px | 40px |
| `.margin-b-sm` | 16px | 12px |
| `.margin-b-md` | 32px | 24px |

## 6. Componentes
### Formulários
