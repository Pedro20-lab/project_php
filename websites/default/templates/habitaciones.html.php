<?php foreach ($habs as $hab): ?>

  <div class="w-9/12 mx-auto my-0">
    <img class="rounded w-12 h-12" src="./assets/habitacion3.jpeg" :alt="imgAlt">
    <div class="mt-2">
      <div>
        <p class="text-xs text-slate-600 uppercase font-bold tracking-wider"><?= htmlspecialchars($hab['habitacion_tipo'], ENT_QUOTES, 'UTF-8') ?></p>
        <div class="font-bold text-slate-700 leading-snug">
          <a :href="url" class="hover:underline"><?= htmlspecialchars($hab['descripcion_habitacion'], ENT_QUOTES, 'UTF-8') ?></a>
        </div>
        <span class="mt-2 text-sm text-slate-600"><?= htmlspecialchars($hab['precio_habitacion'], ENT_QUOTES, 'UTF-8') ?></span>
      </div>
    </div>
  </div>

<?php endforeach; ?>