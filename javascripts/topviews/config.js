const pv = require('../shared/pv');

/**
 * Configuration for Topviews application.
 * This includes selectors, defaults, and other constants specific to Topviews
 * @type {Object}
 */
const config = {
  defaults: {
    dateRange: 'last-month',
    excludes: []
  },
  formStates: ['processing', 'complete', 'search', 'reset'],
  maxDate: moment().subtract(1, 'day').startOf('day').utc().toDate(),
  maxYear: moment().subtract(1, 'year').startOf('year').utc().toDate(),
  pageSize: 100,
  platformSelector: '#platform-select',
  validateParams: ['project', 'platform'],
  timestampFormat: 'YYYYMMDD00'
};

module.exports = config;
