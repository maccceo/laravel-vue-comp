
{{-- template con ciò che andrà nell'html --}}
<script type="text/x-template" id="dist-conv">
  <div class="auto-flex">
    <h1>@{{ title }}</h1>
    <label>m </label><input type="text" v-model='m'>
    <label>km </label><input type="text" v-model='km'>
    <p>@{{ footer }}</p>
  </div>
</script>


{{-- parte dinamica del template --}}
<script type="text/javascript">
  Vue.component('distance-converter', {

    // template mostrato sopra
    template: '#dist-conv',

    // primo inserimento statico
    data: function() {
      return {
        'm': 0,
        'km': 0
      };
    },

    // proprietà: possono essere usate un po' come parametri passati alla funzione alla chiamata del template
    props: {
      title: String,
      footer: String
    },

    // funzioni che si attivano alla modifica del parametro indicato
    watch: {
      'm': function(val) {
        this.m = val;
        this.km = val / 1000;
      },
      'km': function(val) {
        this.m = val * 1000;
        this.km = val;
      }
    }
  });
</script>