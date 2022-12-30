# CSS 的文字樣式

## 文字的顏色

1. 使用 `RGB`
    1. `16` 進制表示: `#RRGGBB`, `#RGB`. ex: `color: #FF0000` = `color: #F00`
    2. `rgb(0~255,0~255,0~255)` 表示。 ex: `color: rgb(255,0,0)`
    3. `rgb(n%,n%,n%)` 表示。 ex: `color: rgb(100%,0%,0%)`
2. 使用 `RGBA`: `RGB` + `alpha`(透明度 `0~1`)。 ex: `color: rgba(100%, 0%, 0%, .5)`
3. 使用 `HSL`
   1. HSL即色相、飽和度、亮度（英語：`Hue`, `Saturation`, `Lightness`）。
   2. 色相（H）是色彩的基本屬性，就是平常所説的顏色名稱，如`紅色`、`黃色`等。 `0` 度: 紅色， `120` 度: 綠色， `240`  度: 藍色
   3. 飽和度（S）是指色彩的純度，越高色彩越純，低則逐漸變灰，取 `0-100%` 的數值。`0%` 無色， `100%` 純色
   4. 亮度（L），取 `0-100%`。 `0%` 黑色, `100%` 白色，一般取中間值 50%
   5. 例子: `color: hsl(120, 100%, 50%)`
4. 使用 `HSLA`: `HSL` + `alpha`(透明度 `0~1`)。 ex: `color: hsla(120, 100%, 50%, 0.5)`

## 文字的對齊

樣式: text-align: `left`/`right`/`center`/`justify`

## 文字的裝飾

樣式: text-decoration: `underline`/`overline`/`line-through`/`none`

## 文字的字體

1. 樣式: `font-family`
2. 一般字體
   `sans-serif` 非襯線字，`serif` 襯線字
3. 網路字體
   1. [google font](https://fonts.google.com/)
   2. [typekit](https://typekit.com): 付費/免費。 適用於平面設計
   3. [fontsquirrel](https://www.fontsquirrel.com/)
   4. [justfont](https://www.justfont.com) 
   5. [文鼎雲字庫](https://www.ifontcloud.com/index/index.jsp)
   6. [華康威 Font](https://dfo.dynacw.com.tw/)
