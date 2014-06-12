(function () {
var tiles = document.querySelectorAll(".js-Tile")
var tilesLength = tiles.length

document.documentElement.addEventListener("click", routeEvent, false)

function routeEvent(eventObject){
  var target = eventObject.target
  // checks if className contains `js-ToggleTile` and exits if not
  if((" " + target.className + " ").indexOf(" js-ToggleTile ") == -1) {
    return
  }
  // toogles the right tile
  toggleTiles(target.getAttribute("data-tile"))
}

function toggleTiles(tileId){
  var tile
  var index = -1
  while(++index < tilesLength) {
    tile = tiles[index]
    if(tile.id == tileId) {
      tile.style.display = "block"
    } else {
      // is hidden by default
      tile.style.display = ""
    }
  }
}

toggleTiles(tiles[0].id)
}());