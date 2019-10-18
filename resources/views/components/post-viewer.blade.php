
{{-- template con ciò che andrà nell'html --}}
<script type="text/x-template" id="post-viewer">
  <div class="box">
    <p><strong>@{{ title }}</strong> di @{{ author }}<br>
    <span v-show="content">Contenuto: @{{ content }}</span></p>
  </div>
</script>


{{-- parte dinamica del template --}}
<script type="text/javascript">
  Vue.component('post-viewer', {

    // template mostrato sopra
    template: '#post-viewer',

    // proprietà: possono essere usate un po' come parametri passati alla funzione alla chiamata del template
    props: {
      title: String,
      author: String,
      content: String,
      id: Number
    }

    // funzioni che si attivano alla modifica del parametro indicato
    // watch: {
    //   'm': function(val) {
    //     this.m = val;
    //     this.km = val / 1000;
    //   },
    //   'km': function(val) {
    //     this.m = val * 1000;
    //     this.km = val;
    //   }
    // }
  });
</script>