<template>
  <div class="my-5">
    <input type="hidden" name="products" :value="finalValue" />

    <div class="d-flex">
      <div class="">
        <input
          list="products"
          placeholder="Product search.."
          class="form-control"
          v-model="q"
          @change="searchProducts"
        />

        <datalist
          id="products"
          v-for="product in productList"
          :key="product.id"
        >
          <option :value="product.id" />
        </datalist>
      </div>
      <button @click.prevent="addProduct" class="btn btn-primary btn-sm">
        Add Product
      </button>
    </div>

    <br /><br />

    <!-- table -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Product name</th>
            <th>Qty</th>
            <th>Selling Price</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="row in attrRows" :key="row.id">
            <td>{{ row.id }}</td>
            <td>
              <input class="form-control" type="text" :value="row.name" />
            </td>
            <td>
              <input class="form-control" type="text" :value="row.unit" />
            </td>
            <td>
              <input class="form-control" type="text" :value="row.price" />
            </td>
            <td>
              <input class="form-control" type="text" :value="row.total" />
            </td>
            <td>
              <button
                class="btn btn-sm btn-danger"
                @click.prevent="deleteRow(row.id)"
              >
                Del
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      attrRows: [],
      finalValue: "",
      productList: [],
      q: "",
      // name,
      // price,
      // unit,
      // total,
    };
  },
  props: {
    attributes: {
      type: Array,
    },
  },
  mounted() {
    if (this.attributes.length) {
      this.rows = this.attributes;
      this.save();
    }
  },
  methods: {
    addProduct() {
      let uid = Math.floor(1000 + Math.random() * 900000);

      this.attrRows.push({
        id: uid,
        name: "apple",
        qty: "10",
        price: "20",
        unit: "10",
        total: "20000",
      });
      console.log(this.rows);
    },
    deleteRow(id) {
      this.attrRows = this.attrRows.filter((row) => row.id !== id);
      this.save();
    },

    searchProducts() {
      this.productList = [];
      axios
        .get("/admin/product/search", { params: { name: this.q } })
        .then((res) => res.data)
        .then((data) => {
          this.productList = data;
          console.log(data);
        })
        .catch((e) => {
          console.log(e);
        });
    },
    save() {
      this.finalValue = JSON.stringify(this.attrRows);
    },
  },
};
</script>

<style>
</style>