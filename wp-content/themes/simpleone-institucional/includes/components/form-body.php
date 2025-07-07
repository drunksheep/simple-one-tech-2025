<form id="contactForm" class="grid lg:grid-cols-2 gap-4">
  <label class="field-wrapper">
    <p class="text-white text-sm lg:text-lg font-bold mb-2">Nome e sobrenome</p>
    <div class="relative">
      <i class="fa-regular fa-user form-icon"></i>
      <input class="basic-input" name="name" type="text" placeholder="Ex: João Santos" required>
    </div>
  </label>

  <label class="field-wrapper">
    <p class="text-white text-sm lg:text-lg font-bold mb-2">Empresa</p>
    <div class="relative">
      <i class="fa fa-store form-icon"></i>
      <input class="basic-input" name="company" type="text" placeholder="Ex: SimpleOne Tech">
    </div>
  </label>

  <label class="field-wrapper col-span-2">
    <p class="text-white text-sm lg:text-lg font-bold mb-2">Setor/Área de atuação</p>
    <select class="basic-input" name="area" required>
      <option class="bg-gray-400" disabled selected>Selecione</option>
      <option class="bg-gray-400" value="Serviços / Empresa">Serviços / Empresa</option>
      <option class="bg-gray-400" value="Bares e Restaurantes">Bares e Restaurantes</option>
      <option class="bg-gray-400" value="Linha de Produtos">Linha de Produtos</option>
      <option class="bg-gray-400" value="Roupas e Acessórios">Roupas e Acessórios</option>
      <option class="bg-gray-400" value="Eletro / Eletrônicos">Eletro / Eletrônicos</option>
      <option class="bg-gray-400" value="Finanças">Finanças</option>
      <option class="bg-gray-400" value="Jurídico">Jurídico</option>
    </select>
  </label>

  <label class="field-wrapper">
    <p class="text-white text-sm lg:text-lg font-bold mb-2">E-mail</p>
    <div class="relative">
      <i class="fa-regular fa-envelope form-icon"></i>
      <input class="basic-input" name="email" type="email" placeholder="Ex: joao@santos.com" required>
    </div>
  </label>

  <label class="field-wrapper">
    <p class="text-white text-sm lg:text-lg font-bold mb-2">Celular / WhatsApp</p>
    <div class="relative">
      <i class="fa fa-phone form-icon"></i>
      <input class="basic-input" name="phone" type="text" placeholder="Ex: (00) 90000-0000">
    </div>
  </label>

  <label class="field-wrapper col-span-2">
    <p class="text-white text-sm lg:text-lg font-bold mb-2">Mensagem</p>
    <textarea class="basic-input" name="message" placeholder="Do que você precisa?" required></textarea>
  </label>

  <button type="submit" class="btn btn-purple taller w-full max-w-none block lg:col-span-2 disabled:opacity-20 disabled:cursor-not-allowed">
    Enviar &nbsp; <i class="fa fa-arrow-right"></i>
  </button>
</form>
