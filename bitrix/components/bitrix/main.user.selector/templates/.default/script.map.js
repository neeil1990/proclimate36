{"version":3,"sources":["script.js"],"names":["BX","namespace","Main","User","Selector","UserSelector","params","this","caller","container","containerId","id","inputName","inputId","isInputMultiple","inputNode","querySelector","useSymbolicId","openDialogWhenInit","selector","UI","TileSelector","getById","Error","searchInputNode","getSearchInput","lazyload","addCustomEvent","events","buttonSelect","openDialog","bind","tileRemove","removeTile","tileClick","clickTile","SelectorController","init","prototype","onCustomEvent","selectorId","open","tile","unsetValue","type","isNotEmptyObject","data","isNotEmptyString","url","urlUseSlider","SidePanel","Instance","window","setUsers","list","addInputs","value","join","fireEvent","getUsers","getInputs","map","split","filter","parseInt","length","setValue","test","selectOne","util","in_array","push","addInput","document","createElement","name","appendChild","removeInputs","forEach","convert","nodeListToArray","querySelectorAll","remove","Controller","userSelector","isOpen","SelectorManager","selectorInstance","instances","itemsSelected","itemEntityId","entityId","entities","hasOwnProperty","items","Object","keys","toLowerCase","nodes","input","tag","bindNode","select","self","getUserSelector","item","email","readonly","undeletable","entityType","isExtranet","extranet","isCrmEmail","crmEmail","addTile","htmlspecialcharsback","tab","style","display","contextNode","context","unSelect","getTile","deleteSelectedItem","itemId","focus","closeDialog","openSearch","closeSearch","body","contains"],"mappings":"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","file":"script.map.js"}