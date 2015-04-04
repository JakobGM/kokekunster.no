# encoding: utf-8
keys = 0
cur = None # current node

# En node er en dictionary med følgende felt:
def make_node(number):
  return {"number":number, "label":None, "parent":None, "left":None, "right":None}

def set_arc(from_node, arc, to_node):
  from_node[arc] = to_node
  to_node["parent"] = from_node

def move_to(to_node):
  global cur
  if cur["label"] in ('L', 'SL') and to_node in (cur["left"], cur["right"]):
    print("Du kan ikke gå videre fra denne låsnoden uten å låse opp først!")
    return False
  elif to_node == None:
    print("Dette er en blindvei.")
    return False
  elif to_node["label"] == 'K':
    raise Exception("Du ble spist av en kanin!")

  cur = to_node
  return True

def label(n): # DEBUG
  return nodes[n]["label"]

nodes = [ make_node(i) for i in range(76) ]
nodes[0]["label"] = "INN"
set_arc(nodes[0], "left", nodes[1])
set_arc(nodes[0], "right", nodes[2])
set_arc(nodes[2], "left", nodes[3])
nodes[3]["label"] = "L"
set_arc(nodes[2], "right", nodes[4])
set_arc(nodes[3], "left", nodes[5])
set_arc(nodes[3], "right", nodes[6])
set_arc(nodes[4], "left", nodes[7])
nodes[7]["label"] = "N"
set_arc(nodes[4], "right", nodes[8])
set_arc(nodes[5], "left", nodes[9])
set_arc(nodes[5], "right", nodes[10])
set_arc(nodes[6], "left", nodes[11])
set_arc(nodes[6], "right", nodes[12])
set_arc(nodes[11], "left", nodes[13])
set_arc(nodes[11], "right", nodes[14])
set_arc(nodes[12], "left", nodes[15])
nodes[15]["label"] = "L"
set_arc(nodes[12], "right", nodes[16])
nodes[16]["label"] = "N"
set_arc(nodes[13], "left", nodes[17])
set_arc(nodes[13], "right", nodes[18])
set_arc(nodes[15], "left", nodes[19])
set_arc(nodes[15], "right", nodes[20])
set_arc(nodes[17], "left", nodes[21])
set_arc(nodes[17], "right", nodes[22])
set_arc(nodes[19], "left", nodes[23])
nodes[23]["label"] = "N"
set_arc(nodes[19], "right", nodes[24])
set_arc(nodes[20], "left", nodes[25])
set_arc(nodes[20], "right", nodes[26])
set_arc(nodes[21], "left", nodes[27])
set_arc(nodes[21], "right", nodes[28])
set_arc(nodes[26], "left", nodes[29])
nodes[29]["label"] = "N"
set_arc(nodes[26], "right", nodes[30])
nodes[30]["label"] = "S"
set_arc(nodes[27], "left", nodes[31])
set_arc(nodes[27], "right", nodes[32])
set_arc(nodes[28], "left", nodes[33])
nodes[33]["label"] = "L"
set_arc(nodes[28], "right", nodes[34])
set_arc(nodes[30], "left", nodes[35])
set_arc(nodes[30], "right", nodes[36])
nodes[36]["label"] = "K"
set_arc(nodes[33], "left", nodes[37])
set_arc(nodes[33], "right", nodes[38])
set_arc(nodes[37], "left", nodes[39])
nodes[39]["label"] = "S"
set_arc(nodes[37], "right", nodes[40])
set_arc(nodes[39], "left", nodes[41])
nodes[41]["label"] = "K"
set_arc(nodes[39], "right", nodes[42])
set_arc(nodes[40], "left", nodes[43])
set_arc(nodes[40], "right", nodes[44])
set_arc(nodes[44], "left", nodes[45])
set_arc(nodes[44], "right", nodes[46])
set_arc(nodes[46], "left", nodes[47])
nodes[47]["label"] = "N"
set_arc(nodes[46], "right", nodes[48])
set_arc(nodes[48], "left", nodes[49])
set_arc(nodes[48], "right", nodes[50])
nodes[50]["label"] = "SL"
set_arc(nodes[50], "left", nodes[51])
set_arc(nodes[50], "right", nodes[52])
set_arc(nodes[51], "left", nodes[53])
set_arc(nodes[51], "right", nodes[54])
set_arc(nodes[52], "left", nodes[55])
set_arc(nodes[52], "right", nodes[56])
set_arc(nodes[56], "left", nodes[57])
set_arc(nodes[56], "right", nodes[58])
set_arc(nodes[57], "left", nodes[59])
nodes[59]["label"] = "N"
set_arc(nodes[57], "right", nodes[60])
set_arc(nodes[58], "left", nodes[61])
nodes[61]["label"] = "S"
set_arc(nodes[58], "right", nodes[62])
set_arc(nodes[61], "left", nodes[63])
set_arc(nodes[61], "right", nodes[64])
nodes[64]["label"] = "K"
set_arc(nodes[62], "left", nodes[65])
set_arc(nodes[62], "right", nodes[66])
nodes[66]["label"] = "SL"
set_arc(nodes[65], "left", nodes[67])
set_arc(nodes[65], "right", nodes[68])
set_arc(nodes[66], "left", nodes[69])
nodes[69]["label"] = "UT"
set_arc(nodes[68], "left", nodes[70])
set_arc(nodes[68], "right", nodes[71])
set_arc(nodes[71], "left", nodes[72])
nodes[72]["label"] = "S"
set_arc(nodes[71], "right", nodes[73])
nodes[73]["label"] = "N"
set_arc(nodes[72], "left", nodes[74])
nodes[74]["label"] = "K"
set_arc(nodes[72], "right", nodes[75])
nodes[75]["label"] = "K"

cur = nodes[0] # Current node er INN

# Public interface ;>
__all__ = ["label", "nummer", "er_vanlig", "er_stank", "er_nokkel", "er_laas", "er_superlaas", "er_inngang", "er_utgang", "gaa_tilbake", "gaa_venstre", "gaa_hoyre", "gaa_ut", "plukk_opp", "laas_opp"]

def nummer():
  return cur["number"]

def er_vanlig():
  return cur["label"] == None

def er_stank():
  return cur["label"] == 'S'

def er_nokkel():
  return cur["label"] == 'N'

def er_laas():
  return er_superlaas() or cur["label"] == 'L'

def er_superlaas():
  return cur["label"] == 'SL'

def er_inngang():
  return cur["label"] == 'INN'

def er_utgang():
  return cur["label"] == 'UT'

def gaa_tilbake():
  return move_to(cur["parent"])

def gaa_venstre():
  return move_to(cur["left"])

def gaa_hoyre():
  return move_to(cur["right"])

def gaa_ut():
  if cur["label"] == 'UT':
    print("Du løste labyrinten. Gratulerer!")
    return True

  if cur["label"] == 'INN':
    print("Du er ved inngangen til labyrinten, men kaninene har sperret veien ut!")
  else:
    print("Det finnes ingen utgang her ...")

  return False

def plukk_opp():
  if not er_nokkel():
    print("Det finnes ingen nøkkel her.")
    return False

  global keys
  keys += 1
  cur["label"] = None
  return True

def laas_opp():
  if not er_laas():
    print("Denne noden er ikke en lås.")
    return False
  
  global keys

  if er_superlaas() and keys < 2:
    print("Du kan ikke låse opp denne superlåsen uten minst to nøkler.")
    return False
  elif keys < 1:
    print("Du kan ikke låse opp denne låsen uten en nøkkel.")
    return False

  if not er_superlaas():
    keys -= 1
  else:
    keys -= 2

  cur["label"] = None
  return True
