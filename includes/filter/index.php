<style type="text/css">
.filter-container {
  margin-bottom: 0px;
  display: inline-flex;
  flex-direction: row;
}

.filter-group {
  margin-bottom: 10px;
  display: inline-block;
  padding: 16px;
}
#filter-btn {
  height: 44px;
}


</style>

<div class="filter-container">
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
  <div class="filter-group">
    <label for="brand">Storage:</label>
    <select id="brand">
      <option value="all">All</option>
      <option value="small">128 GB</option>
      <option value="medium">256 GB</option>
      <option value="hight">512 GB</option>
      <option value="very_hight">1 TB</option>
    </select>
  </div>
  <button id="filter-btn">Filter</button>
</div>

