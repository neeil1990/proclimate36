{"version":3,"sources":["vue.bitrix.bundle.js"],"names":["exports","main_polyfill_core","ui_vue_vendor_v2","BitrixVue","babelHelpers","classCallCheck","this","_components","_mutations","_clones","event","VueVendorV2","createClass","key","value","create","params","component","id","Object","assign","_registerCloneComponent","_getComponentParamsWithMutation","mutateComponent","mutations","_this","push","filter","element","cloneComponent","sourceId","isComponent","extend","options","nextTick","callback","context","set","target","_delete","delete","directive","definition","use","plugin","mixin","_mixin","observable","object","compile","template","version","getFilteredPhrases","phrasePrefix","phrases","arguments","length","undefined","result","BX","message","hasOwnProperty","startsWith","freeze","componentId","_this2","componentParams","forEach","mutation","_applyMutation","_cloneObjectWithoutDuplicateFunction","_this3","components","cloneId","concat","objectParams","level","param","prototype","toString","call","typeof","toUpperCase","substr","clonedObject","replace","testNode","obj","i","j","len","tagName","RegExp","test","classList","contains","trim","className","getAttribute","Vue","VueVendor","window"],"mappings":"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","file":"vue.bitrix.bundle.map.js"}