<style type="text/css">
.filter-container {
  margin-bottom: 20px;
}

.filter-group {
  margin-bottom: 10px;
  display: inline-block;
}

.product-list {
  /* Styles for product list */
}

</style>

<div class="filter-container">
  <h2>New product</h2>
  <div class="filter-group">
    <label for="category">Category:</label>
    <select id="category">
      <option value="all">All</option>
      <option value="laptop">Laptop</option>
      <option value="phone">Phone</option>
      <option value="tablet">Tablet</option>
    </select>
  </div>
  <div class="filter-group">
    <label for="brand">Brand:</label>
    <select id="brand">
      <option value="all">All</option>
      <option value="apple">Apple</option>
      <option value="samsung">Samsung</option>
      <option value="hp">HP</option>
    </select>
  </div>
  <button id="filter-btn">Filter</button>
</div>

<div class="product-list">
  <!-- Your product list goes here -->
</div>
