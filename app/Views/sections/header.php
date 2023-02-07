<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  Stili  -->

    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet" type="text/css">

    <?php if (isset($this->data['styles'])) :
        foreach ($this->data['styles'] as $style) : ?>
            <link href="<?= $style ?>" rel="stylesheet" type="text/css">
        <?php endforeach;
    endif; ?>

    <!--  Scripts  -->

    <?php if (isset($this->data['js'])) :
        foreach ($this->data['js'] as $js) : ?>
            <script defer src="<?= $js ?>"></script>
        <?php endforeach;
    endif; ?>

    <!--  Titolo pagina  -->

    <title><?= isset($this->data['title']) ?: "Biblioteca | Login" ?></title>

</head>
<body>
<div class="shapes" style="z-index: 0">
    <svg viewBox="0 0 200 200">
        <path d="M37.3,-56.3C50.2,-57,64.1,-51,66.7,-40.5C69.4,-30,60.9,-15,60.6,-0.2C60.2,14.6,68,29.2,62.8,35.2C57.5,41.3,39.2,38.8,26.6,45.2C14,51.5,7,66.7,-3.3,72.5C-13.7,78.2,-27.3,74.6,-41.3,69C-55.3,63.4,-69.6,55.9,-69,44.1C-68.5,32.3,-53.1,16.1,-49,2.3C-45,-11.5,-52.5,-23,-54.3,-37.1C-56.2,-51.2,-52.5,-67.8,-42.5,-68.8C-32.5,-69.8,-16.3,-55.1,-2.1,-51.6C12.1,-48,24.3,-55.5,37.3,-56.3Z" style="transform: translate(0%, -10%)" />
        <path d="M52.8,-53.4C68.3,-49.9,80.6,-33.1,77.9,-18.2C75.1,-3.3,57.3,9.7,47.2,27.1C37,44.5,34.5,66.1,25.6,68.7C16.6,71.3,1.3,54.8,-17.7,48.1C-36.6,41.3,-59.3,44.4,-73.4,35.1C-87.4,25.8,-92.7,4.3,-86.5,-12.6C-80.3,-29.4,-62.7,-41.5,-46.3,-44.9C-30,-48.2,-15,-42.9,1.8,-45.1C18.6,-47.2,37.3,-56.9,52.8,-53.4Z" style="transform: translate(40%, 45%)" />
        <path d="M26,-39.9C32.5,-25.6,35.6,-16.2,41.9,-3.9C48.2,8.4,57.7,23.6,55.1,35.2C52.4,46.8,37.7,54.8,23.8,55.7C9.9,56.5,-3,50.2,-12.7,43.1C-22.3,36,-28.6,28.1,-31.7,19.8C-34.7,11.4,-34.5,2.7,-38.5,-12.4C-42.5,-27.5,-50.9,-49,-45.1,-63.4C-39.4,-77.8,-19.7,-85.1,-5,-79.2C9.8,-73.3,19.6,-54.1,26,-39.9Z" style="transform: translate(85%, -5%)" />
        <path d="M41.7,-62.7C49.7,-51.6,48.8,-33.6,51,-18.5C53.2,-3.4,58.6,8.7,59,22.7C59.3,36.7,54.6,52.7,43.9,64.9C33.2,77.2,16.6,85.8,3.1,81.5C-10.4,77.2,-20.8,60.1,-27.2,46.4C-33.6,32.8,-36,22.6,-45.9,10.6C-55.8,-1.5,-73.3,-15.5,-70.9,-23.1C-68.6,-30.8,-46.4,-32.1,-31.3,-40.9C-16.2,-49.6,-8.1,-65.8,4.4,-71.8C16.9,-77.9,33.7,-73.8,41.7,-62.7Z" style="transform: translate(110%, 60%)" />
    </svg>
    <!--    generatore https://www.blobmaker.app/    -->

    <input class="field-input" type="text" placeholder="asd">
</div>