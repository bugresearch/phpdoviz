# PHP Doviz Fonksiyonu


Bu fonksiyon sayesinde birm çok döviz türünü aınında sitenize entegre edebileceksiniz. Desteklenen döviz türleri: 
> CAD, HKD, ISK, PHP, DKK, CZK, AUD, RON, SEK, IDR, INR, BRL, RUB, HRK, JPY, THB, TRY, CHF, SGD, PLN, BGN, CNY, NOK, NZD, ZAR, USD, MXN, ILS, GBP, KRW, MYR


# Kullanımı

  - Fonksiyonu kullanabilmeniz için uluslararası para kodları hakkında bilgi sahibi olmanız gerekmektedir. Her para birimi için 3 büyük harften oluşan uluslararası bir kod vardır. Örneğin Amerikan Dolarının kodu USD, Türk Lisarsının kodu ise TRY'dir Bu kodları ufak bir araştırmayla bulabilirsiniz.
  - Fonksiyonu kullanırken para kodlarının başına veya sonuna boşluk eklememeniz gerekmektedir.

**Parametreler:**

- İlk parametremizle hangi para biriminin taban alınacağını seçiyoruz. Örneğin 1 EURO'nun kaç Türk Lirası edeceğini hesaplamak için taban olarak EURO'yu seçiyoruz. EURO'nun uluslararası para kodu EUR olduğundan ilk parametremize "EUR" yazıyoruz
- İkinci parametremizle ise taban para biriminin hangi para birimine çevirileceğini seçiyoruz. Örneğin 1 EURO'nun kaç Türk Lirası edeceğini hesaplamak için çevirilecek para birimi Türk Lirası olduğundan Türk Lirası'nın uluslararası para kodu olan "TRY" ikinci parametremizi oluşturuyor.
- Üçüncü parametremiz ise çarpanımız. Örneğin 2.5 EURO'nun kaç Türk Lirası ettiğini öğrenmek için üçüncü parametremize "2.5" yazabiliriz. Eğer 1 EURO'nun kaç Türk Lirası ettiğini öğrenmek istiyorsak üçüncü parametre olarak "1" göndermek zorunda değiliz. Bu senaryoda üçüncü parametreyi boş bırakabiliriz. 

**Örnek Kullanım:**
```php
<?php
require_once("doviz.php"); // Döviz Fonksiyonumuzun Yazılı Olduğu Dosyayı Çağırdık

echo doviz("EUR","TRY"); // Bir EURO'nun Türk Lirası karşılığını yazdırdık.
echo doviz("TRY","EUR"); // Bir Türk Lirası'nın EURO karşılığını yazdırdık.

echo doviz("EUR","TRY","2") // 2 EURO'nun Türk Lirası karşılığını yazdırdık.
?>
```


**Code with love. Deniz BEKTAŞ**
