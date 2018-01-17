@extends('dashboard.layout')


@section('css')
	<style>
		.box-normal
		{
			margin-top: 10px;
		    padding: 20px;
		    text-align: center;
		    box-sizing: border-box;

		}

		.text-p
		{

			margin-bottom: 10px;
			text-align: left;
		}

		.regulations
		{
		    margin: 25px;
		    padding: 20px;
		    background: #95a5a6;
		}

	</style>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="regulations box-normal">
			<h2 class="h2"> Regulamin</h2>
			<h3 class="h3">[postanowienia wstępne]</h3>
			<p class="text-p"> 
				Art.1 Regulamin niniejszy reguluje stosunki cywilnoprawne pomiędzy Użytkownikami, Operatorem serwisu ibuynow.eu powstające na tle korzystania z ww. serwisu.
				<br>§1.Regulamin określa zasady świadczenia przez serwis ibuynow.eu na rzecz Użytkowników usług polegających na umożliwieniu zamieszczania ogłoszeń w serwisie ibuynow.eu.
				<br>§2. Warunkiem uzyskania dostępu do funkcjonalności serwisu ibuynow.eu jest skorzystanie z urządzenia komunikującego się z Internetem i wyposażonego w powszechnie używaną przeglądarkę internetową.
				<br>§3. Każda umowa zawarta poprzez serwis ibuynow.eu zawierana jest wyłącznie między oferentem i oblatem.
				<br>§4.Operator Serwisu ibuynow.eu nie jest w żadnym przypadku stroną zobowiązania zaciągniętego przez użytkowników serwisu ibuynow.eu
			</p>
			<h3 class="h3">[definicje]</h3>
			<p class="text-p">
				Art.2 Użyte w regulaminie określenia oznaczają: 
				<br>§1. Regulamin- nininiejszy regulamin;
				<br>§2. Serwis ibuynow.eu albo serwis – internetowy serwis ogłoszeniowy pod nazwą ibuynow.eu , prowadzony w języku polskim, umożliwiający zamieszczanie i przeglądanie Ogłoszeń, dostępny w domenie internetowej ibuynow.eu;
				<br>§3. Ogłoszenie — sporządzone przez Użytkownika oferta dotycząca sprzedaży (zaproszenie do zawarcia umowy sprzedaży), zamiany, pracy, oferowanych usług itd., zamieszczane w serwisie, na warunkach przewidzianych w Regulaminie;
				<br>§4. Towar — rzecz, usługa lub prawo oferowane na terenie Rzeczypospolitej Polskiej, które mogą być przedmiotem Ogłoszenia, zgodnie z Regulaminem;
				<br>§5. Użytkownik — osoba fizyczna, która ukończyła 18 lat i posiada pełną zdolność do czynności prawnych, osoba prawna lub jednostka organizacyjna nieposiadająca osobowości prawnej, której przepisy ustaw nadają osobowość prawną lub mogącą we własnym imieniu nabywać prawa i zaciągać zobowiązania, która w trybie przewidzianym w Regulaminie utworzyła Konto;
				<br>§6.Konto – przydzielona danemu Użytkownikowi, identyfikowana za pomocą adresu e-mail, część serwisu, za pomocą której Użytkownik może dokonywać określonych działań w ramach serwisu;
				<br>§7. Operator - osoba zajmująca się administracją serwisu ibuynow.eu.
			</p>
				<h3 class="h3">[zasady rejestracji i logowania]</h3>
			<p class="text-p">
				Art.3 §1. Rejestracja w serwisie wymaga posiadania adresu e-mail.
				<br>§2. Rejestracja jest bezpłatna
				<br>§3. Rejestrując się użytkownik potwierdza, iż dane przez niego podane są prawdziwe, a także podane przez niego informacje są jego danymi personalnymi, nie osób trzecich lub fikcyjnych. 
				<br>§4. Rejestracji dokonuje się poprzez:
				<br>1) wypełnienie i zarejestrowanie formularza rejestracyjnego;
				<br>2) za pośrednictwem konta portalu społecznościowego "Facebook".
				<br>§5. Przy logowaniu, Użytkownik używa swojej spersonalizowanej nazwy(login) albo adres e-mail, a także hasła. 
				<br>§6.Podawanie owych danych osobom postronnym jest zabronione, w przypadku naruszenia owego zakazu Użytkownik ponosi odpowiedzialność za ew. szkody albo krzywdy powstałe poprzez jego działanie. 
				<br>§7. Operator serwisu nie ponosi odpowiedzialności za podanie przez Użytkownika niezgodnych ze stanem faktycznym danych osobowych, a także za sytuacje wymienione w art.3§7 niniejszego regulaminu.
				<br>§8.Operator chroni dane Użytkowników zgodnie z polityką prywatności określoną w Załączniku nr 1 do Regulaminu stanowiąca jego integralną część.
			</p>
				<h3 class="h3">[ogólne zasady korzystania]</h3>
			<p class="text-p">
				Art.4 §1.Użytkownik jest zobowiązany do przestrzegania niniejszego Regulaminu. Skorzystanie przez Użytkownika z serwisu oznacza wyrażenie przez Użytkownika zgody na warunki określone w niniejszym Regulaminie.
				<br>§2. Zamieszczanie ogłoszeń przez Użytkownika na serwisie  odbywa się na zasadzie art. 14 ustawy z dnia 18 lipca 2002 r. o świadczeniu usług drogą elektroniczną (Dz. U. z 2002 r., Nr 144, poz. 1204 ze zm.).
				<br>§3.Ogłoszenie pochodzi od Użytkownika, który samodzielnie ustala jego treść. Treść Ogłoszenia musi być zgodna ze stanem faktycznym.
				<br>§4. Nie ma limitu ilości ogłoszeń zamieszczanych przez jednego użytkownika, owy przepis w żaden sposób nie narusza postanowień zamieszczonych w art.4§7 niniejszego regulaminu.
				<br>§5.Zamieszczenie Ogłoszenia powinno odzwierciedlać rzeczywisty zamiar dokonania transakcji, której Ogłoszenie dotyczy.
				<br>§6.Ogłoszenia dostępne są dla wszystkich użytkowników Internetu. Wraz z Ogłoszeniem na stronie serwisu zamieszczany jest formularz kontaktowy, który (bez ujawniania adresu e-mail ogłoszeniodawcy) umożliwia każdemu zalogowanemu Użytkownikowi przesłanie wiadomości na adres e-mail przypisany do Ogłoszenia
				<br>§7.Jedno Ogłoszenie może dotyczyć tylko jednego Towaru.
				1)W ogłoszeniu jest możliwe dodanie informacji o dostępności Towaru w różnych kolorach. 2)Ten sam Towar w tym samym czasie może być przedmiotem tylko jednego Ogłoszenia. 
				<br>§8. Zamieszczanie ogłoszeń możliwe jest tylko w odpowiedniej dla danej oferty kategorii (elektronika, motoryzacja, praca, dom i ogród, zwierzęta, rolnictwo, sport i hobby, muzyka, edukacja,usługi, moda).
				<br>§9.Użytkownik jest odpowiedzialny za publikowane treści (w tym zdjęcia) i gwarantuje, że są one zgodne ze stanem faktycznym oraz prawem a ich publikacja nie narusza praw Operatora, Regulaminu oraz praw osób trzecich, w tym praw autorskich.
				<br>§10.Treść Ogłoszenia powinna w jasny sposób nawiązywać do Towaru, opisywać go dokładnie, rzetelnie i kompletnie oraz nie może wprowadzać w błąd innych Użytkowników, w szczególności co do właściwości Towaru, takich jak: jego jakość, parametry, stan, pochodzenie, marka czy producent. Zabronione jest przekazywanie powyższych informacji poza serwisem.
			</p>
				<h3 class="h3">[konto]</h3>
			<p class="text-p">
				Art.5<br>§1.Zamieszczenie Ogłoszenia wymaga akceptacji Regulaminu, wypełnienia przez Użytkownika odpowiedniego formularza i utworzenia Konta.
				<br>§2.W przypadku wypełnienia formularza, o którym mowa powyżej, na podany przez Użytkownika adres e-mail zostanie niezwłocznie wysłana wiadomość zwrotna Operatora służąca do aktywacji Ogłoszenia oraz zawierająca inne wymagane prawem informacje.
				<br>§3.Utworzenie Konta obok aktywacji Ogłoszeń zapewnia Użytkownikowi dodatkowo pełen dostęp do jego Ogłoszeń ( np. w celu ich modyfikacji) i korespondencji z innymi Użytkownikami. Aktywacja Konta następuje po utworzeniu hasła i wskazaniu adresu e-mail przez Użytkownika na odpowiedniej stronie serwisu ibuynow.eu. Po dokonaniu czynności, o których mowa w zdaniu poprzednim, Operator na podany przez Użytkownika adres e-mail wyśle wiadomość wskazującą sposób aktywacji Konta (link aktywacyjny) oraz inne wymagane prawem informacje.
				<br>§4.Utworzenie Konta jest równoznaczne z zawarciem umowy pomiędzy Użytkownikiem a Operatorem w przedmiocie świadczenia usług na warunkach przewidzianych w Regulaminie.
				<br>§5.W przypadku osób prawnych i jednostek organizacyjnych, utworzyć Konto w ich imieniu oraz dokonywać wszelkich dalszych czynności w ramach serwisu może jedynie osoba, która jest umocowana do działania w tym zakresie w imieniu tych podmiotów.
				<br>§6.Użytkownik może posiadać i korzystać tylko z jednego Konta w serwisie.
				<br>§7.Niedozwolone jest używanie tymczasowych adresów email, zarówno do tworzenia Konta jak i zamieszczenia Ogłoszenia.
				<br>§8.Świadczenie usług przez Operatora w ramach Konta w serwisie ma charakter bezterminowy, jednakże Użytkownik może w dowolnym momencie usunąć Konto i tym samym rozwiązać umowę z Operatorem będąc zalogowanym na swoim Koncie poprzez wybranie odpowiedniej opcji.
				<br>§9.Świadczenie usług przez Operatora w ramach publikacji Ogłoszenia w serwisie dla Użytkownika, ma charakter bezterminowy, jednakże Użytkownik może w dowolnym momencie zakończyć emisję Ogłoszenia i tym samym rozwiązać umowę z Operatorem będąc zalogowanym w panelu administracyjnym Ogłoszenia, poprzez wybranie odpowiedniej opcji.
				<br>§10. Ogłoszenia mogą dodawać tylko zarejestrowani i zalogowani Użytkownicy.
				<br>§11.Użytkownik będący konsumentem może w terminie 14 dni od zawarcia umowy kupna odstąpić bez podania przyczyny. Odstąpienie w tym trybie nie jest możliwe, jeżeli przed upływem tego terminu Użytkownik aktywował emisję Ogłoszenia, tj. świadczenie usługi przez Operatora zostało rozpoczęte.
				<br>§12. Odstąpienie odbywa się na zasadach przewidzianych w ustawie z dnia 30 marca 2014r. o prawach konsumenta o prawach (Dz.U.z 2014, poz.827, ze zm.).
				<br>§13. Wzór owego odstąpienia znajduje się w Załączniku nr 2 do niniejszego regulaminu 
				<br>§14. Korzystanie z usług serwisu ibuynow.eu jest bezpłatne.
				<br>§15. Operator serwisu ibuynow.eu nie pobiera opłat za zamieczanie ogłoszeń.
				<br>§16. Operator serwisu ibuynow.eu nie pobiera prowizji od transakcji zawartych między użytkownikami tegoż serwisu.
			</p>
				<h3 class="h3">[ogłoszenia]</h3>
			<p class="text-p">
				Art.6 <br>§1.Zamieszczenie Ogłoszenia w serwisie ibuynow.eu wymaga wypełnienia formularza dostępnego na stronie serwisu ibuynow.eu, w tym umieszczenia treści Ogłoszenia (tj. wypełnienia co najmniej pól oznaczonych jako obowiązkowe).
<br>§2.Za pomocą formularza, o którym mowa powyżej, Użytkownik może dołączyć do Ogłoszenia zdjęcia w liczbie i w formatach określonych na stronie serwisu.
<br>§3.Ogłoszenie może być zamieszczone wyłącznie w języku polskim (nie dotyczy ogłoszeń zamieszczanych w kategorii Praca).
<br>§4.W treści Ogłoszenia (w jego opisie i dołączonych zdjęciach) Użytkownik nie może zamieszczać adresów e-mail, numerów telefonów i numerów komunikatorów internetowych.
<br>§5.Niedozwolone jest zamieszczanie Ogłoszeń o charakterze towarzyskim, dotyczy to w szczególności kategorii Praca.
<br>§6.W okresie emisji Ogłoszenia Użytkownik może modyfikować treść Ogłoszenia i jego parametry (z wyłączeniem kategorii, w której jest publikowane), a także usunąć Ogłoszenie.
<br><br>Art.7 <br>§1.Użytkownik zobowiązuje się, że nie będzie zamieszczać na serwisie ogłoszeń: 
<br>1) które są przedmiotem praw osób trzecich, chyba że Użytkownik posiada oficjalną licencję lub zgodę od podmiotu uprawnionego do przesyłania lub zamieszczania takich Ogłoszeń;
<br>2) które nie mają jasno dookreślonej ceny;
<br>3) fikcyjnych;
<br>4) o charakterze towarzyskim;
<br>5) reklam, promocji, w szczególności reklam jakichkolwiek innych serwisów internetowych lub jakichkolwiek linków odsyłających do innych stron internetowych, zwłaszcza innych serwisów aukcyjnych lub ogłoszeniowych;
<br>6) bezpłatnego wydania rzeczy;
<br>7) oznaczonych danymi innej osoby fizycznej lub firmy osoby prawnej;
<br>8) sprzecznych z polskim prawem, a także w sprzeczności z międzynarodowymi zobowiązaniami Rzeczypospolitej Polskiej;
<br>9) sprzecznych z zasadami współżycia społecznego.
			</p>
				<h3 class="h3">[zasady odpowiedzialności]</h3>
			<p class="text-p">Art.8<br>§1.Operator umożliwia Użytkownikom umieszczanie Ogłoszeń w serwisie ibuynow.eu, nie ingerując w formę i treść tych Ogłoszeń, z zastrzeżeniem, iż Użytkownik zobowiązuje się do niezamieszczania Ogłoszeń z Towarami, którymi obrót narusza obowiązujące przepisy prawa, zasady współżycia społecznego lub uprawnienia osób trzecich. 
<br>Art.9 Operator nie ponosi odpowiedzialności za nienależyte wykonanie bądź niewykonanie przez Strony umów związanych z Ogłoszeniem.
<br>Art.10 Operator nie ponosi odpowiedzialności za jakość lub legalność oferowanych Towarów, prawdziwość i rzetelność informacji podawanych przez Użytkowników, a także zdolność sprzedających oraz kupujących do realizacji transakcji.
<br>Art.11 Za naruszenie Regulaminu może być uznane m.in. manipulacja słowami kluczowymi w ofercie, wystawienie Ogłoszenia w niewłaściwej kategorii, zastrzeżenie w treści Ogłoszenia dotyczące wysłania Towaru wyłącznie poprzez uprzednią zapłatę ceny przez kupującego. Powyższe działania skutkować będą podjęciem przez Operatora stosownych działań, nie wykluczając usunięcia Ogłoszenia lub blokady Konta.
<br>Art.12 Operator ma prawo do usunięcia Ogłoszenia, jeżeli narusza ono w jakikolwiek sposób postanowienia Regulaminu lub przepisy prawa, w szczególności gdy zawiera treści:
<br>1)powszechnie uznane za obraźliwe,
<br>2)noszące znamiona czynów nieuczciwej konkurencji,
<br>3)naruszające dobre obyczaje, prawa autorskie lub inne prawa własności intelektualnej,
szkodzące dobremu imieniu lub renomie Operatora,wprowadzające w błąd.
Art.13 Operator nie odpowiada za:
<br>1)brak zainteresowania przedmiotem Ogłoszenia,
<br>2)realizację obowiązków Użytkowników wynikających z rękojmi i gwarancji dotyczących przedmiotu Ogłoszenia,
<br>3)działanie siły wyższej, systemów teleinformatycznych lub urządzeń od Operatora niezależnych,
<br>Art.14 Operator ma prawo do usunięcia każdego Ogłoszenia lub zablokowania Konta jeśli zaistniało podejrzenie że za pośrednictwem Ogłoszenia lub Konta mogło lub może dojść do działań zagrażających bezpieczeństwu innych Użytkowników w ramach serwisu. Podobnie w przypadku, w którym Ogłoszenie negatywnie wpływa na dobre imię Operatora lub w inny sposób szkodzi Operatorowi.
<br>Art.15 W sytuacji gdy Konto lub działalność Użytkownika w ramach Serwisu ibuynow.eu wymaga dodatkowej weryfikacji danych, w przypadku powzięcia przez Operatora uzasadnionych obaw, co do bezpieczeństwa Konta, dotyczących w szczególności nieuprawnionego przejęcia Konta przez inną osobę, Operator może uzależnić korzystanie z ibuynow.eu od wiarygodnego potwierdzenia przez Użytkownika jego tożsamości. Po ustaniu wyżej wskazanych okoliczności, Operator zniesie przedmiotowe ograniczenia zastosowane wobec Użytkownika</p>
				<h3 class="h3">[postanowienia końcowe]</h3>
			<p class="text-p">Art.16 Regulamin dostępny jest w serwisie ibuynow.eu, a także przesyłany drogą poczty elektronicznej na adres e-mail Użytkownika w przypadkach wymaganych przez odpowiednie przepisy prawne.<br>
Art.17 O zmianie Regulaminu Operator poinformuje poprzez zamieszczenie informacji na stronie serwisu.
<br>§1.Zmiany wchodzą w życie w terminie wskazanym przez Operatora, nie krótszym jednak, niż 7 dni od dnia zamieszczenie informacji na stronie serwisu.
<br>§2.Usługi aktywowane przed wejściem w życie zmian będą wykonane na warunkach dotychczasowych, dalsze zaś aktywacje możliwe są na warunkach bieżących.
<br>Art.18 O ile bezwzględnie obowiązujące przepisy prawa nie stanowią inaczej, prawem właściwym dla całości umowy pomiędzy Użytkownikiem a Operatorem, której przedmiotem jest świadczenie przez Operatora usług na warunkach określonych w Regulaminie, jest prawo polskie.
<br>Art.19 Wszelkie spory związane z usługami świadczonymi przez Operatora w ramach serwisu ibuynow.eu będą rozstrzygane przez właściwe polskie sądy powszechne.
<br>Art.20 Przepisy nieuregulowane niniejszym regulaminem regulują przepisy kodeksu cywilnego i ustaw odrębnych.</p>
	
		</div>
	</div>
</div>

@endsection