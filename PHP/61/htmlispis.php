<html>

<head>
<style>
.podebljano {
  font-weight: bold;
}
</style>
</head>

<body>

<!-- Korisno je izbegavati dosta echo generisanja HTML-a -->

<p>Ovo nece biti prikazano preko PHP-a.</p>
<?php echo 'Ovo ce biti ispisano pomocu PHP-a.'; ?>
<p>Ovo takodje nece biti prikazano preko PHP-a.</p>

<!-- Sintaksa za if naredbu -->

<?php if (2 + 3 == 6): ?>
  <p>Rezultat je tacan.</p>
<?php else: ?>
  <p>Rezultat nije tacan.</p>
<?php endif; ?>

<!-- Bolduje pasus ukoliko je ispunjen uslov -->

<p<?php if (2 + 3 == 5): ?> class="podebljano"<?php endif; ?>>Ovo je pasus.</p>

<!-- Sintaksa za for naredbu -->

<ul>
<?php for ($i = 0; $i < 5; ++$i): ?>
  <li>Zdravo svima!</li>
<?php endfor; ?>
</ul>

</body>

</html>