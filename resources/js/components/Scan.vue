<template>
  <ais-instant-search index-name="places" :search-client="searchClient"
  :initial-ui-state="initialUiState">
    <div class="left-panel">
      <ais-clear-refinements />
            <h2>Brands</h2>
      <ais-refinement-list attribute="perfecture.name" searchable />
      <ais-configure :hitsPerPage="8" />

    </div>
    <div class="right-panel">
      <ais-search-box submit-title="Submit the query" />

      <ais-hits>
      	<div slot="item" slot-scope="{ item }">
      		<h2>{{ item.name }}</h2>
      		<img :src="item.image" align="left" :alt="item.name" />
      		<div class="hit-name">
      			<a :href="item.path">
      				<ais-highlight attribute="name" :hit="item"></ais-highlight>
      			</a>
      		</div>
      		<div class="hit-description">
      			<ais-highlight attribute="body" :hit="item"></ais-highlight>
      		</div>
      		<div class="hit-price">{{ item.price }}</div>
      	</div>
      </ais-hits>

      <ais-pagination />
    </div>
  </ais-instant-search>

</template>

<script>
import algoliasearch from 'algoliasearch/lite';
import 'instantsearch.css/themes/satellite-min.css';

export default {
  data() {
    return {
      searchClient: algoliasearch(
        'YFK1O71KI4',
        '2550f70ee8259df907daf6520d5b2028',
      ),
      
    };
  },
};
</script>

<style>
body {
  font-family: sans-serif;
  padding: 1em;
}
.hit-description {
  color: #888;
  font-size: 0.8em;
  margin-bottom: 0.5em;
}
</style>
