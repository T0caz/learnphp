<?php include __DIR__ . '/partials/header.php'; ?>
<main class="container">
  <?php if(isset($_GET['name']) && isset($_GET['age'])): ?> 
  <h1>Hello <?=$_GET['name']?? 'Nameless' ?>! You are <?=$_GET['age']?? 'Infinite' ?> years old!</h1>
  <?php endif; ?>
  <form>
    <label>
      Name:
    <input name="name" type="text" placeholder="name">
    </label>
    <label for="age">Age:</label>
    <input id="age" name="age" type="number" placeholder="age">

    <input type="submit" value="Send">
    <button>Send</button>
  </form>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>